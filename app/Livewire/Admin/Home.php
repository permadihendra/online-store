<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.home');
    }
}
