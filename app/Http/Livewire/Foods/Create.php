<?php

namespace App\Http\Livewire\Foods;

use App\Models\Food;
use Livewire\Component;

class Create extends Component
{
    public $name,$price,$type;

    public function addFood(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'price'         => ['required'],
                'type'          => ['required','string','max:255'],
            ]);

            Food::create([
                'name'        => $this->name,
                'price'         => $this->price,
                'type'          => $this->type,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.foods.create');
    }
}
