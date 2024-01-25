<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout('layouts.app')]
class Counter extends Component
{
    public $count = 1;
    public $title = "hello world";

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {

        return view('livewire.counter');
    }
}
