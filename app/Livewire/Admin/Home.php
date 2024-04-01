<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public $title;

    public function mount(){
        $this->title = 'AdminPage - Admin - Online Store';
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.home');
    }
}
