<?php

namespace App\Http\Livewire\Dashboard\Archive;

use Livewire\WithFileUploads;
use App\Models\Activity;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use App\Models\Mail;

class Create extends Component
{
    use WithFileUploads;
    public $mail_number;
    public $name;
    public $category_id;
    public $activity_id;
    public $archive_time;
    public $file;

    public function store()
    {
        $this->archive_time = Carbon::now();
        $this->validate([
            'mail_number' => 'required|string|min:3|max:30',
            'name' => 'required|string|min:3|max:30',
            'category_id' => 'required|integer',
            'activity_id' => 'required|integer',
            'file' => 'required|mimes:pdf',
        ]);

        $this->file = $this->file->store('pdf-storage', 'public');

        Mail::create([
            'mail_number' => $this->mail_number,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'activity_id' => $this->activity_id,
            'archive_time' => $this->archive_time,
            'file' => $this->file,
        ]);

        session()->flash('toast_success', 'Data Berhasil Disimpan.');

        return redirect()->route('index.dashboard.archive');
    }

    public function render()
    {
        $categories = Category::all();
        $activities = Activity::all();
        return view('livewire.dashboard.archive.create', [
            'categories' => $categories,
            'activities' => $activities,
        ]);
    }
}
