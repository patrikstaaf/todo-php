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

            {{-- <img src="{{ $user->avatar ?? '/uploads/profile-placeholder.png' }}" alt="your avatar" width="40" class="mx-auto rounded m-4"> --}}
            {{-- <img src="/uploads/profile-placeholder.png" alt="your avatar" width="40" class="mx-auto rounded m-4"> --}}
            <img src="{{ auth()->user()->avatar ?? '/uploads/user-avatar.webp' }}" alt="your avatar" width="40" class="mx-auto p-4">
            <p class="text-center p-4">Image max size: 2 MB.</p>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">
        <div class="">
            <label class="sr-only" for="avatar">Avatar</label>
            <div class="flex">
                {{-- <input class="bg-gray-100 border-2 w-full p-4 rounded lg" type="file" name="avatar" id="avatar" accept="image/*"> --}}
                <input class="mx-auto" type="file" name="avatar" id="avatar" accept="image/*">
                {{-- <img src="{{ auth()->user()->avatar ?? '/uploads/user-avatar.webp' }}" alt="your avatar" width="40"> --}}

            </div>

            @error('avatar')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
            @enderror
        </div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('email') border-red-300  @enderror" value="{{ auth()->user()->email }}" required>

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <div>
                        <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Update profile info</button>
                    </div>
                </div>
            </form>

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <h2 class="w-full pt-10 pb-2 font-bold text-center">Change password</h2>
                <div class="mb-4">
                    <label for="current-password">Current Password</label>
                    <input type="password" name="current-password" id="current-password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('current-password') border-red-300 @enderror" required>

                    @error('current-password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new-password">New Password</label>
                    <input type="password" name="new-password" id="new-password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('new-password') border-red-300 @enderror" required>

                    @error('new-password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new-password-confirm">Confirm new password</label>
                    <input type="password" name="new-password-confirm" id="new-password-confirm" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('new-password-confirm') border-red-300 @enderror" required>

                    @error('new-password-confirm')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Change password</button>
                </div>
            </form>

            <h2 class="w-full pt-10 pb-2 font-bold text-center">Delete Account</h2>
            @can('delete', $user)
        <form action="{{ route('profile.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Confirm, do you want to delete your account and its data (you will not be able to retrieve it if you change your mind).')" class="bg-red-600 text-white px-4 py-3 rounded font-medium w-full mt-2 mb-10">Delete</button>
        </form>
        @endcan
        </div>
    </div>
    </x-layout>
