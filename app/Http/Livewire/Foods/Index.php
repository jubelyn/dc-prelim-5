<?php

namespace App\Http\Livewire\Foods;

use App\Models\Food;
use Livewire\Component;

class Index extends Component
{
    public function loadFood() {
        $foods = Food::orderBy('name')->get();

        return compact('foods');
    }

    public function render()
    {
        return view('livewire.foods.index', $this->loadFood());
    }
}
