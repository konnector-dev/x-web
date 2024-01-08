<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Url;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ShowUrls extends Component
{
    public Project $project;
    public Url $Url;
    public $urls;

    public $editing = false;
    public $showModal = false;

    #[Validate('required')]
    public $name = '';
    #[Validate('string')]
    public $url = '';

    public string $message = '';

    #[Layout('layouts.full-width')]
    public function render(): View
    {
        $this->urls = $this->project->urls()->orderBy('name')->get(['id', 'name', 'url']);
        return view('livewire.show-urls');
    }

    public function create(): void
    {
        $this->editing = false;
        $this->showModal = true;
        $this->name = '';
        $this->url = '';
    }

    public function save(): void
    {
        $this->validate();

        Auth::user()->urls()->create(
            [
                ...$this->only('name', 'url'),
                'project_id' => $this->project->id
            ]
        );
        $this->showModal = false;
        $this->message = 'URL created successfully.';
        $this->dispatch('notify-url-saved');
    }

    public function edit(Url $Url): void
    {
        $this->Url = $Url;
        $this->editing = true;
        $this->showModal = true;
        $this->name = $Url->name;
        $this->url = $Url->url;
    }

    public function update(): void
    {
        $this->validate();

        $this->Url->update($this->only('name', 'url'));
        $this->Url = new Url();
        $this->editing = false;
        $this->showModal = false;
        $this->message = 'URL updated successfully.';
        $this->dispatch('notify-url-saved');
    }

    public function delete(Url $Url): void
    {
        $Url->delete();
        $this->message = 'URL deleted successfully.';
        $this->dispatch('notify-url-saved');
    }
}
