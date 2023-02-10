<?php

namespace App\Http\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;

class Table extends Component
{
    public function render()
    {
        $categoryData = Category::all();
        return view('livewire.dashboard.category.table', [
            'categories' => $categoryData,
        ]);
    }
}
