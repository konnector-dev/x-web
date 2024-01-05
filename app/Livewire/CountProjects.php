<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CountProjects extends Component
{
    public $count = 0;
    public function render(): View
    {
        $this->count = Project::where('user_id', Auth::id())->count();
        return view('livewire.count-projects');
    }
}
