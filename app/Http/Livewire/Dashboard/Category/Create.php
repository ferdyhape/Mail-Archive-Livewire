<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $name;

    public function store()
    {
        $data = $this->validate([
            'name' => 'required|string|min:3|max:30',
        ]);
        Category::create($data);

        session()->flash('toast_success', 'Data Berhasil Disimpan.');

        return redirect()->route('index.dashboard.category');
    }
    public function render()
    {
        return view('livewire.dashboard.category.create');
    }
}
