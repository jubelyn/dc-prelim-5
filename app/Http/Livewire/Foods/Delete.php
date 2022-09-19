<?php

namespace App\Http\Livewire\Foods;
use App\Models\Food;
use Livewire\Component;

class Delete extends Component
{

    public $foodId;



    public function getFoodProperty(){
        return Food::find($this->foodId);
    }

    public function render()
    {
        return view('livewire.foods.delete');
    }
    public function delete() {
        $this->food->delete();

        return redirect('/dashboard')->with('message', $this->food->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
