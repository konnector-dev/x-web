<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Urls extends Component
{
    public Collection $urls;

    public function render(): View
    {
        $this->urls = Auth::user()->urls()
            ->with(
                [
                    'project' => function ($query) {
                        $query->select('id', 'name');
                    },
                ]
            )
            ->orderBy('name')
            ->get()
            ->sortBy('project.name');
        return view('livewire.urls');
    }
}
