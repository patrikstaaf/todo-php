<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit', ['user' => $user]);
        // $user = User::with('id')
        // return view('profile.edit') - with('user', auth()->user());
    }

    // public function update(Request $request, User $user)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email|max:255|unique:users,email',
    //         'password' => 'required|min:7|max:255|confirmed',
    //         'avatar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048', 
    //     ]);

    //     $user-update([
    //         'email' => $request->email,
    //         'password' => $request->password,
    //         'avatar' => $request->hasFile(),
    //     ])




    //     return redirect('/profile')->with('success', 'Your profile info has been updated.');
    // }

    public function destroy(Request $request, User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();

        $request->session()->invalidate();

        return redirect('register')->with('success', 'Your account and your data has been deleted.');
    }
}
