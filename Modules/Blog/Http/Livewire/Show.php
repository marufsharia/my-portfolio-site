<?php

namespace Modules\Blog\Http\Livewire;

use Livewire\Component;

class Show extends Component
{
    public $message;
    public function render()
    {
        return view('blog::livewire.show');
    }
}