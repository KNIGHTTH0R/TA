<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ListHistory extends Component
{
    public $bg;
    public $text;
    public $history;

    public function __construct($bg, $text, $history)
    {
        $this->bg = $bg;
        $this->text = $text;
        $this->history = $history;
    }

    public function render()
    {
        return view('components.admin.list-history');
    }
}
