<?php


use App\Http\Controllers\GithubController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/github/login', function () {
    return Socialite::driver('github')
        ->scopes([
            'user:email',
        ])
        ->redirect();
})->name('github.login');

Route::controller(GithubController::class)->group(function () {
    Route::get('/auth/github/callback', 'callback')->name('github.redirect');
});
