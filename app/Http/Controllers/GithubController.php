<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function callback(): Redirector|Application|RedirectResponse
    {
        $github_user = Socialite::driver('github')->user();

        $user = User::where('github_id', $github_user->id)->first();

        if (!$user) {
            $user = new User();
            $user->name = $github_user->getName() ?? $github_user->getEmail();
            $user->email = $github_user->getEmail();
            $user->github_id = $github_user->getId();
            $user->password = null;
            $user->save();

            $user->ownedTeams()->save(Team::forceCreate([
                'user_id' => $user->id,
                'name' => explode(' ', $user->name, 2)[0] . "'s Team",
                'personal_team' => true,
            ]));
        }

        Auth::login($user, true);
        $user->createToken('github_oauth_token');
        return redirect()->intended(route('dashboard'));
    }
}
