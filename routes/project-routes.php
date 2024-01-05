<?php

use App\Livewire\ShowProjects;
use Illuminate\Support\Facades\Route;

Route::get('/projects', ShowProjects::class)->name('projects.index')->lazy();
