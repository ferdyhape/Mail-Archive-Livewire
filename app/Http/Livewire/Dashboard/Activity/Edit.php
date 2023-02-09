<?php

namespace App\Http\Livewire\Dashboard\Activity;

use Livewire\Component;
use App\Models\Activity;

class Edit extends Component
{
    public $activity, $name;
    public function update()
    {
        $data = $this->validate([
            'name' => 'required|string|min:3|max:30',
        ]);

        Activity::where('id', $this->activity->id)->update($data);

        session()->flash('toast_success', 'Data Berhasil Diupdate.');

        return redirect()->route('index');
    }

    public function render()
    {
        $this->name = $this->activity->name;
        return view('livewire.dashboard.activity.edit');
    }
}
