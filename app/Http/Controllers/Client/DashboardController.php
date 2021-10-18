<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $transaction;

    public function __construct()
    {
        $this->transaction = new Transaction();
    }
    public function index()
    {
        $transaction_pending = $this->transaction->userId()->pending()->get();
        $transaction_expired = $this->transaction->userId()->expired()->get();
        $transaction_failed = $this->transaction->userId()->failed()->get();
        $transaction_success = $this->transaction->userId()->success()->get();

        return view('admin.dashboard.index', compact('transaction_pending', 'transaction_expired', 'transaction_failed', 'transaction_success'));
    }

    public function history()
    {
        $histories = $this->transaction->userId()->latest()->get();

        return view('admin.dashboard.history', compact('histories'));
    }

    public function myDonate()
    {
        $transaction_pending = $this->transaction->userId()->pending()->take(3)->get();

        return view('admin.dashboard.my-donate', compact('transaction_pending'));
    }
}
