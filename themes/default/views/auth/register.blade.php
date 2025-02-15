<x-guest-layout>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('First Name') }}
                    </label>

                    <input id="first_name" type="text" class="form-input w-full @error('first_name')  border-red-500 @enderror"
                            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Last Name') }}
                    </label>

                    <input id="last_name" type="text" class="form-input w-full @error('last_name')  border-red-500 @enderror"
                            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Email') }}
                    </label>

                    <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <!-- Password -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Password') }}
                    </label>

                    <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                    @error('password')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Confirm Password') }}
                    </label>

                    <input id="password-confirm" type="password" class="w-full form-input"
                            name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
