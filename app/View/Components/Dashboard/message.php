<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Message extends Component
{
    public $messages;

    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('components.dashboard.message');
    }
}
