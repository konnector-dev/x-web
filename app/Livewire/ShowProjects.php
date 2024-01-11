<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ShowProjects extends Component
{
    public $projects;
    public $editing = false;
    public $showModal = false;

    #[Validate('required')]
    public $name = '';

    #[Validate('string')]
    public $description = '';

    public Project $project;

    #[Layout('layouts.full-width')]
    public function render(): View
    {
        $this->projects = Project::where('user_id', Auth::id())
            ->withCount('urls')
            ->orderBy('name')
            ->get(['id', 'name', 'description']);
        return view('livewire.show-projects');
    }

    public function create(): void
    {
        $this->editing = false;
        $this->showModal = true;
        $this->name = '';
        $this->description = '';
    }

    public function save(): void
    {
        $this->validate();

        Auth::user()->projects()->create($this->only('name', 'description'));
        $this->showModal = false;
    }

    public function edit(Project $project): void
    {
        $this->project = $project;
        $this->editing = true;
        $this->showModal = true;
        $this->name = $this->project->name;
        $this->description = $this->project->description;
    }

    public function update(): void
    {
        $this->validate();

        $this->project->update($this->only('name', 'description'));
        $this->project = new Project();
        $this->editing = false;
        $this->showModal = false;
    }

    public function delete(Project $project): void
    {
        $project->delete();
    }
}
