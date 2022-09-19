<?php

namespace App\Http\Livewire\Events;
use App\Models\Event;
use Livewire\Component;

class Delete extends Component
{

    public $eventId;



    public function getEventProperty(){
        return Event::find($this->eventId);
    }

    public function render()
    {
        return view('livewire.events.delete');
    }
    public function delete() {
        $this->event->delete();

        return redirect('/dashboard')->with('message', $this->event->firstname . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
