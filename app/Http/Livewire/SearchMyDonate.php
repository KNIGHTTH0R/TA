<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class SearchMyDonate extends Component
{
    public $search;
    public $transactions;
    public $transaction_pending;

    public function render()
    {
        $this->transactions = Transaction::with('campaign')
                            ->whereHas('campaign', function($query) {
                                $query->where('title', 'like', '%'.$this->search.'%');
                            })->get();

        $this->transaction_pending = Transaction::where('user_id', auth()->user()->id)
                            ->where('status', 'pending')
                            ->latest()
                            ->take(3)
                            ->get();

        return view('livewire.search-my-donate');
    }
}
