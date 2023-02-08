<?php

namespace App\Http\Livewire\Dashboard\Archive;

use Livewire\Component;

class Download extends Component
{
    public $mail;

    public function downloadPDF()
    {
        $filepath = public_path('storage/' . $this->mail->file);
        $filename = $this->mail->name . '.pdf';
        return response()->download($filepath, $filename);
    }
    public function render()
    {
        return view('livewire.dashboard.archive.download');
    }
}
