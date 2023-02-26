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

        return redirect()->route('index.dashboard.activity')->with('toast_success', 'Data Berhasil Disimpan.');
    }
    public function render()
    {
        return view('livewire.dashboard.activity.create');
    }
}
