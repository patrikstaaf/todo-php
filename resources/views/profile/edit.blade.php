<x-layout title="Edit Profile">
    <div class="flex justify-center mx-auto w-full md:w-3/5">
        <div class="bg-white p-6 rounded-lg w-full">
            <h1 class="text-lg mb-6 w-full font-semibold">Edit Profile</h1>

            <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">

        <div class="mb-6">
            <label class="sr-only" for="avatar">Avatar</label>
            <div class="flex">
                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar" accept="image/*">
                {{-- <img src="{{ url(auth()->user()->avatar ?? '/uploads/user-avatar.webp') }}" alt="your avatar" width="40"> --}}
                <img src="{{ $user->avatar ?? '/uploads/user-avatar.webp' }}" alt="your avatar" width="40">
            </div>

            @error('avatar')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
            @enderror
        </div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('email') border-red-300  @enderror" value="{{ $user->email }}" required>

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
        </div>
    </div>
    </x-layout>
