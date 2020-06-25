<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $children;

    public function mount()
    {
        $this->addChildren();
    }

    public function render()
    {
        return view('livewire.parent-component');
    }

    public function addChildren()
    {
        for ($i = 1; $i < rand(1, 10); $i++) {
            $this->children[] = [
                'title' => 'child ' . $i
            ];
        }
    }
}
