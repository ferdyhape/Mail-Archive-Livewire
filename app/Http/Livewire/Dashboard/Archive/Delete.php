<?php

namespace App\Http\Livewire\Dashboard\Archive;

use App\Models\Mail;
use Livewire\Component;

class Delete extends Component
{
    public $mail;
    public $deleteId = '';
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function destroy()
    {
        Mail::find($this->deleteId)->delete();

        //flash message
        session()->flash('toast_success', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.dashboard.archive.delete');
    }
}
