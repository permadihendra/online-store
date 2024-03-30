<?php

namespace App\Livewire\Homepage;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{

    #[Layout('components.layouts.guest')]  //Spesific the layout path, this is different form the docs
    public function render()
    {
        return view('livewire.homepage.home');
    }
}
