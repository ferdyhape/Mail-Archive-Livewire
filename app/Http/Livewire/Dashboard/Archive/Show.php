<?php

namespace App\Http\Livewire\Dashboard\Archive;

use Livewire\Component;

class Show extends Component
{
    public $mail;
    public function render()
    {
        return view('livewire.dashboard.archive.show');
    }
}
