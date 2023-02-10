<?php

namespace App\Exports;

use App\Models\Mail;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ArchiveExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $mailData = Mail::all();
        return view('livewire.dashboard.archive.table-for-export', [
            'mails' => $mailData,
        ]);
    }
}
