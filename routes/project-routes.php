<?php

use App\Livewire\ShowProjects;
use App\Livewire\ViewProject;
use Illuminate\Support\Facades\Route;

Route::get('/projects', ShowProjects::class)->name('projects.index')->lazy();
Route::get('/projects/{project}', ViewProject::class)->name('projects.view')->lazy();
