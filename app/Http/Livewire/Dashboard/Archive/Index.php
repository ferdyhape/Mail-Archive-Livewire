<?php

namespace App\Http\Livewire\Dashboard\Archive;

use App\Models\Mail;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public function render()
    {
        $mailData = Mail::all();
        $categoryData = Category::all();
        return view('livewire.dashboard.archive.index', [
            'mails' => $mailData,
            'categories' => $categoryData,

        ]);
    }
}
