<?php

namespace App\Http\Livewire\Dashboard\Archive;

use App\Exports\ArchiveExport;
use Livewire\Component;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Export extends Component
{
    public function export()
    {
        $time = Carbon::now()->toDateTimeString();
        $time = str_replace(" ", "_", $time);
        $filename = 'Archive_' . $time . '.xlsx';
        return Excel::download(new ArchiveExport, $filename);
    }
    public function render()
    {
        return view('livewire.dashboard.archive.export');
    }
}
