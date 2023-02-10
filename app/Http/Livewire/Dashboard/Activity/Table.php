<?php

namespace App\Http\Livewire\Dashboard\Activity;

use Livewire\Component;
use App\Models\Activity;

class Table extends Component
{
    public function render()
    {
        $activityData = Activity::all();
        return view('livewire.dashboard.activity.table', [
            'activities' => $activityData,
        ]);
    }
}
