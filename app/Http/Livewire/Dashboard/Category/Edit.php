<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public $category, $name;
    public function update()
    {
        $data = $this->validate([
            'name' => 'required|string|min:3|max:30',
        ]);

        Category::where('id', $this->category->id)->update($data);

        session()->flash('toast_success', 'Data Berhasil Diupdate.');

        return redirect()->route('index');
    }

    public function render()
    {
        $this->name = $this->category->name;
        return view('livewire.dashboard.category.edit');
    }
}
