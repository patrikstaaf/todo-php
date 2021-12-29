<x-layout title="Reset Password">
    <div class="flex justify-center mx-auto w-full md:w-3/5">

        <div class=" bg-white p-6 rounded-lg w-full">
            <h1 class="text-lg mb-6 w-full font-semibold">Forgot Password</h1>
            @if (session('status'))
                <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
                </div>
            @endif
            <form action="/reset-password" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('email') border-red-300  @enderror" value="{{ old('email', $request->email) }}" autofocus>

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('password') border-red-300 @enderror">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-gray-100 border-2 w-full p-4 rounded lg @error ('password_confirmation') border-red-300 @enderror">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Reset password</button>
                </div>
            </form>

        </div>
    </div>
    </x-layout>
