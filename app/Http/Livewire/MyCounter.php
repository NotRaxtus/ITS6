<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyCounter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
        // Add debugging
        logger('Increment called. New count: ' . $this->count);
    }

    public function decrement()
    {
        $this->count--;
        // Add debugging
        logger('Decrement called. New count: ' . $this->count);
    }

    public function render()
    {
        return view('livewire\my-counter');
    }
}