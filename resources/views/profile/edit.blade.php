<x-layout title="Edit Profile">
    <div class="flex justify-center mx-auto w-full md:w-3/5">
        <div class="bg-white p-6 rounded-lg w-full">
            <div class="w-full mb-6 text-center">
            <h1 class="font-bold mb-6">Profile Settings</h1>
            <p>On this page you can:</p>
            <ol>
                <li>1. Update your email & avatar</li>
                <li>2. Change password</li>
                <li>3. Delete your account</li>
            </ol>
        </div>
        <h2 class="w-full pt-10 pb-2 font-bold text-center">Edit Profile Info</h2>

            <img src="{{ $user->avatar ?? '/uploads/user-avatar.webp' }}" alt="your avatar" width="150" class="mx-auto p-4">
            <p class="text-center p-4">Image max size: 2 MB.</p>

            <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">
        <div class="">
            <label class="sr-only" for="avatar">Avatar</label>
            <div class="flex">

                <input class="mx-auto" type="file" name="avatar" id="avatar">


            </div>

            @error('avatar')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
            @enderror
        </div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('email') border-red-300  @enderror" value="{{ $user->email }}" required>

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <div>
                        <button type="submit" name="update_user" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Update profile info</button>
                    </div>
                </div>
            </form>

                <form action="{{ route('profile.changepassword', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                <h2 class="w-full pt-10 pb-2 font-bold text-center">Change password</h2>
                <div class="mb-4">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('current_password') border-red-300 @enderror" required>

                    @error('current_password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('new_password') border-red-300 @enderror" required>

                    @error('new_password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new_password_confirm">Confirm new password</label>
                    <input type="password" name="new_password_confirm" id="new_password_confirm" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('new_password_confirm') border-red-300 @enderror" required>

                    @error('new_password_confirm')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" name="change_password" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Change password</button>
                </div>
            </form>

            <h2 class="w-full pt-10 pb-2 font-bold text-center">Delete Account</h2>
            @can('delete', $user)
        <form action="{{ route('profile.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Confirm, do you want to delete your account and its data (you will not be able to retrieve it if you change your mind).')" class="bg-red-600 text-white px-4 py-3 rounded font-medium w-full mt-2 mb-10">Delete</button>
        <p class="text-sm mx-auto text-center">Joined {{ $user->created_at->diffForHumans() }}</p>
        </form>
        @endcan
        </div>
    </div>
    </x-layout>
