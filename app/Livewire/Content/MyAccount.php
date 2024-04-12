<?php

namespace App\Livewire\Content;

use Livewire\Component;
use Livewire\Attributes\Layout;

use App\Models\Order;
use App\Models\item;
use Illuminate\Support\Facades\Auth;

class MyAccount extends Component
{
    public $ordersData = [];

    public function mount(){

        $this->ordersData = Order::where('user_id', Auth::user()->id)->get();

    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.my-account');
    }
}
