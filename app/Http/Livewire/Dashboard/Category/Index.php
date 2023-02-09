<?php

namespace App\Http\Livewire\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public function render()
    {
        $categoryData = Category::all();
        return view('livewire.dashboard.category.index', [
            'categories' => $categoryData,
        ]);
    }
}
