<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction\Transaction;

class SearchMyDonate extends Component
{
    public $search;
    public $transaction_pending;

    public function render()
    {
        $this->transaction_pending = Transaction::with('campaign')
                            ->whereHas('campaign', function($query) {
                                $query->where('title', 'LIKE', '%'.$this->search.'%');
                            })
                            ->where('status', 'pending')
                            ->where('user_id', auth()->user()->id)
                            ->latest()
                            ->take(3)
                            ->get();

        return view('livewire.search-my-donate');
    }
}
