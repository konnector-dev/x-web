<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

Route::get('/', function () {
    $termsFile = Jetstream::localizedMarkdownPath('../../README.md');

    return view('readme', [
        'readme' => Str::markdown(file_get_contents($termsFile)),
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


