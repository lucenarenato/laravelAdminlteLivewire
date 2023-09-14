<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Demo extends Component
{
    public $selectedItems = [];

    public $options = [
        'Davi',
        'Daniel',
        'Jesus',
        'Moises',
    ];

    public function render()
    {
        return view('livewire.select2-demo');
    }
}
