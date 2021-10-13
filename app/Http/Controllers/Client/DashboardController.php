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

        return view('client.dashboard.index', compact('transaction_pending', 'transaction_expired', 'transaction_failed', 'transaction_success'));
    }

    public function history()
    {
        $histories = $this->transaction->userId()->latest()->get();

        return view('client.dashboard.history', compact('histories'));
    }
}
