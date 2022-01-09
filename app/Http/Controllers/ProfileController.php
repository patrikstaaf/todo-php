<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class ProfileController extends Controller
{

    public function show(User $user)
    {
        return view('profile.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('profile.edit', ['user' => $user]);
        // $user = User::with('id')
        // return view('profile.edit') - with('user', auth()->user());
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255', 'unique:users,email' . auth()->user()->id],
            'password' => ['required', 'string', 'max:255', 'min:8', 'confirmed'],
            // 'avatar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            // 'email' => 'required|email|max:255|unique:users,email,'.$request->id,
            // 'password' => 'required|min:8|max:255|confirmed',
            // 'avatar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            // Rule::unique('users')->ignore($user->id)
        ]);


        $user->update([
            'email' => $request->email,
            'password' => $request->password,
            'avatar' => $request->hasFile('avatar'),
        ]);




        return back()->with('success', 'Your profile info has been updated.');
    }

    public function destroy(Request $request, User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();

        $request->session()->invalidate();

        return redirect('login')->with('success', 'Your account and your data has been deleted.');
    }
}
