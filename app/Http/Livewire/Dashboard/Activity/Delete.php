<?php

namespace App\Http\Livewire\Dashboard\Activity;

use Livewire\Component;
use App\Models\Activity;

class Delete extends Component
{
    public $activity;
    public $deleteId = '';
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function destroy()
    {
        Activity::find($this->deleteId)->delete();

        //flash message
        session()->flash('toast_success', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.dashboard.activity.delete');
    }
}
