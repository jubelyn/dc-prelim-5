<?php

namespace App\Http\Livewire\Foods;
use App\Models\Food;
use Livewire\Component;

class Edit extends Component
{

    public $foodId;
    public $name,$price,$type;


    public function mount(){

        $this->name = $this->food->name;
        $this->price = $this->food->price;
        $this->type = $this->food->type;

    }

    public function editFood()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'price'        => ['required'],
            'type'         => ['required','string','max:255'],
        ]);

        $this->food->update([
            'name'=> $this->name,
            'price'=> $this->price,
            'type'=> $this->type,
        ]);

        return redirect('/dashboard')->with('message', $this->food->name .' updated successfully');
    }


    public function getFoodProperty(){
        return Food::find($this->foodId);
    }

    public function render()
    {
        return view('livewire.foods.edit');
    }
}
