<?php

namespace App\Http\Controllers\Client;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Campaign;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormDonateRequest;
use Exception;

class TransactionController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
    }

    public function store(FormDonateRequest $formDonateRequest, Campaign $campaign)
    {
        $transaction = $campaign->transanctions()->create([
            'invoice' => 'NFB'. date('dmY') . Str::upper(Str::random(10)),
            'user_id' => auth()->user()->id,
            'amount' => $formDonateRequest->amount,
            'anonim' => $formDonateRequest->anonim == 'true' ? true : false,
            'pay' => $formDonateRequest->pay,
            'pray' => $formDonateRequest->pray,
            // 'status' default 'pending'
        ]);

        $enabled_payments = '';

        if ($transaction->pay == 'bni') {
            $enabled_payments = $transaction->pay . '_va';
        } else {
            $enabled_payments = $transaction->pay;
        }

        $fullname = $transaction->user->name;
        $exFullname = explode(' ', $fullname);
        $firstname = $exFullname[0];
        $lastname = count($exFullname) > 0 ? implode(' ', array_slice($exFullname, 1)) : '';

        // $amount = str_replace(',','.',number_format($formDonateRequest->amount));

        $transaction_details = [
            'order_id' => $transaction->invoice,
            'gross_amount' => str_replace('.', '', $transaction->amount),
        ];

        $item_details = [
            [
                'id' => $transaction->campaign->id,
                'name' => $transaction->campaign->title,
                'quantity' => 1,
                'price' => str_replace('.', '', $transaction->amount),
            ]
        ];

        $enabled_payments = [$enabled_payments];

        $costumer_details = [
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $transaction->user->email,
        ];

        $params = [
            'enabled_payments' => $enabled_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $costumer_details,
            'item_details' => $item_details,
        ];

        $token = Snap::getSnapToken($params);

        return response()->json([
            'token' => $token
        ]);
    }

    public function notification(Request $request)
    {
        $notif = new Notification();

        $invoice = $notif->order_id;
        $fraud = $notif->fraud_status;
        $fraud = $notif->fraud_status;
        $payment_type = $notif->payment_type;
        $transaction_status = $notif->transaction_status;

        $signatureKey = hash("sha512", $notif->order_id . $notif->status_code . $notif->gross_amount . config('services.midtrans.serverKey'));

        if ($notif->signature_key != $signatureKey) {
            return response(['message' => 'Invalid signature key'], 403);
        }

        $transaction = Transaction::where('invoice', $invoice)->first();

        if ($transaction_status == 'capture') {
            if ($payment_type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->update(['status' => 'pending']);
                } else {
                    $transaction->update(['status' => 'success']);
                }
            }
        } elseif ($transaction_status == 'settlement') {
            $transaction->update(['status' => 'success']);
        } elseif ($transaction_status == 'pending') {
            $transaction->update(['status' => 'pending']);
        } elseif ($transaction_status == 'cancel') {
            $transaction->update(['status' => 'cancel']);
        } else { // deny or failed
            $transaction->update(['status' => 'failed']);
        }
    }
}
