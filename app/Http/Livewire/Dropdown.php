<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    public $livewireShow = false;

    public function someMethod()
    {
    }

    public function render()
    {
        return view('livewire.dropdown');
    }
}
