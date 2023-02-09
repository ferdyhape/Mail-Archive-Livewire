<?php

namespace App\Http\Livewire\Dashboard\Activity;

use App\Models\Activity;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $activityData = Activity::all();
        return view('livewire.dashboard.activity.index', [
            'activities' => $activityData,
        ]);
    }
}
