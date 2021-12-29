
    <x-layout title="Forgot Password">
        <div class="flex justify-center mx-auto w-full md:w-3/5">

            <div class=" bg-white p-6 rounded-lg w-full">
                <h1 class="text-lg mb-6 w-full font-semibold">Forgot Password</h1>
                @if (session('status'))
                    <div class="bg-green-600 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                    </div>
                @endif
                <form action="/forgot-password" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('email') border-red-300  @enderror" value="{{ old('email') }}" autofocus>

                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Email Password Reset Link</button>
                    </div>
                </form>

            </div>
        </div>
        </x-layout>

