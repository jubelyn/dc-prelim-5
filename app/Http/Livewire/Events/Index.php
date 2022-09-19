<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;

class Index extends Component
{
    public function loadEvent() {
        $events = Event::orderBy('name')->get();

        return compact('events');
    }

    public function render()
    {
        return view('livewire.events.index', $this->loadEvent());
    }
}
