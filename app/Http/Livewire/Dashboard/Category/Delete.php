<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Delete extends Component
{
    public $category;
    public $deleteId = '';
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function destroy()
    {
        Category::find($this->deleteId)->delete();

        //flash message
        session()->flash('toast_success', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.dashboard.category.delete');
    }
}
