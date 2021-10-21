<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class MyDonate extends Component
{
    public $transaction;

    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    public function render()
    {
        return view('components.admin.my-donate');
    }
}
