{{-- <x-layout title="Profile Settings">

       <div class="flex justify-center mx-auto w-full p-6">
        <div class="flex flex-col w-full">
        <h1 class="w-full mb-6 font-bold text-center">Profile Settings</h1>

        <div class="flex justify-between max-w-full my-3">

            <div class="flex items-center">
                <div class="flex flex-col">
                <p>Your email: {{ auth()->user()->email }}</p>


                </div>
            </div>
            <div class="flex items-center">

    <a href="{{ route('profile.edit', $user) }}" class="p-3">Edit Profile</a>

        <form action="{{ route('profile.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Confirm, do you want to delete your account and its data (you will not be able to retrieve it if you change your mind).')" class="p-3">Delete account</button>
        </form>
        </div>

        </div>
        <hr>


    </div>




    </x-layout> --}}


    <x-layout title="Edit Profile">
        <div class="flex justify-center mx-auto w-full md:w-3/5">
            <div class="bg-white p-6 rounded-lg w-full">
                <h1 class="w-full mb-6 font-bold text-center">Edit Profile</h1>

                {{-- <img src="{{ $user->avatar ?? '/uploads/profile-placeholder.png' }}" alt="your avatar" width="40" class="mx-auto rounded m-4"> --}}
                {{-- <img src="/uploads/profile-placeholder.png" alt="your avatar" width="40" class="mx-auto rounded m-4"> --}}
                <img src="{{ auth()->user()->avatar ?? '/uploads/user-avatar.webp' }}" alt="your avatar" width="40" class="mx-auto p-4">
                <p class="text-center p-4">Image max size: 2 MB.</p>

                <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
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
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('password') border-red-300 @enderror" required>

                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('password_confirmation') border-red-300 @enderror" required>

                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Save</button>
                    </div>
                </form>
                @can('delete', $user)
            <form action="{{ route('profile.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Confirm, do you want to delete your account and its data (you will not be able to retrieve it if you change your mind).')" class="bg-red-600 text-white px-4 py-3 rounded font-medium w-full mt-2">Delete account</button>
            </form>
            @endcan
            </div>
        </div>
        </x-layout>
