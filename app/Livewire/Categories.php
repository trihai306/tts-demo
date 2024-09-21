<?php

namespace App\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public function mount()
    {
        $this->categories = \App\Models\Category::where('parent_id', null)->where('status', 'active')->get();
    }
    public function render()
    {

        return view('livewire.categories');
    }
}
