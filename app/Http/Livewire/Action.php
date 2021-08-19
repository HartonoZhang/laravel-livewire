<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum1;
    public $sum2;
    public $sum;
    public $sum_default;
    public $message;

    public function sumNumber($sum1, $sum2)
    {
        $this->sum_default = $sum1 + $sum2;
    }

    public function displayMessage($msg)
    {
        $this->message = $msg;
    }

    public function getSum()
    {
        $this->sum = $this->sum1 + $this->sum2;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
