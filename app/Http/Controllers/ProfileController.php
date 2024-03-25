<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function editView(): View
    {
        $user = User::findOrFail(session("user_id", null));
        return view('profile', ['user' => $user]);
    }
    public function editUser(Request $req)
    {
        $user = User::findOrFail(session("user_id", null));
        $user->fullname = $req->fullname;
        $user->bank = $req->bank;
        $user->account_number = $req->account_number;
        $user->profile_logo = $req->profile_logo;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->save();

        return view('profile', ['user' => $user]);
    }
    public function deleteUser()
    {

        $user = User::find(session("user_id", null));
        $user->delete();
        return redirect('/logout');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
