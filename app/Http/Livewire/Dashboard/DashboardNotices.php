<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Notice;
use Livewire\Component;

class DashboardNotices extends Component
{
    public function render()
    {
        $notices = \App\Models\Notice::latest()->take(2)->get();
        return view('livewire.dashboard.dashboard-notices' , compact('notices'));
    }
}
