<?php

namespace App\Http\Livewire\Dashboard\Activity;

use App\Models\Activity;
use Livewire\Component;

class Create extends Component
{
    public $name;

    public function store()
    {
        $data = $this->validate([
            'name' => 'required|string|min:3|max:30',
        ]);
        Activity::create($data);

        session()->flash('toast_success', 'Data Berhasil Disimpan.');

        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.dashboard.activity.create');
    }
}
