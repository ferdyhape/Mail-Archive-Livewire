<?php

namespace App\Http\Livewire\Dashboard\Archive;

use Carbon\Carbon;
use App\Models\Mail;
use Livewire\Component;
use App\Models\Activity;
use App\Models\Category;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $mail, $mail_number, $name, $category_id, $activity_id, $archive_time, $file, $newFile;


    public function update()
    {

        $this->archive_time = Carbon::now();
        $data = $this->validate([
            'mail_number' => 'required|string|min:3|max:30',
            'name' => 'required|string|min:3|max:30',
            'category_id' => 'required|integer',
            'activity_id' => 'required|integer',
        ]);

        if ($this->newFile) {
            $this->file = $this->newFile;
            $data['file'] = $this->file->store('pdf-storage', 'public');
        }
        Mail::where('id', $this->mail->id)->update($data);

        session()->flash('toast_success', 'Data Berhasil Diupdate.');

        return redirect()->route('index.dashboard.archive');
    }

    public function render()
    {
        $this->id = $this->mail->id;
        $this->mail_number = $this->mail->mail_number;
        $this->name = $this->mail->name;
        $this->category_id = $this->mail->category_id;
        $this->activity_id = $this->mail->activity_id;
        $this->archive_time = $this->mail->archive_time;
        $this->file = $this->mail->file;
        $categories = Category::all();
        $activities = Activity::all();
        return view('livewire.dashboard.archive.edit', [
            'categories' => $categories,
            'activities' => $activities,
        ]);
    }
}
