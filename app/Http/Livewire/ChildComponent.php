<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.child-component');
    }
}
