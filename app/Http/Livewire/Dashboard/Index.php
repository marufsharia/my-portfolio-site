<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;

class Index extends Component
{

    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function disableTelescope()
    {
         env('TELESCOPE_ENABLED', false);
         Artisan::call('config:clear');
    }
}