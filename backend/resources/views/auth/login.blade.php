<x-guest-layout>

    <x-authentication-card-logo></x-authentication-card-logo>

    <x-authentication-card>
        <x-slot name="cardheader">
            <x-authentication-card-header h2="Sign in" p="Use the credentials sent to your email"/>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input type="email" id="email" name="email" class="form-control" label="{{ __('Email') }}" :value="old('email')" :required="true" :autofocus="true"/>
            </div>

            <div class="mt-4">
                <x-input type="password" id="password" name="password" class="form-control" label="{{ __('Password') }}" :required="true"/>
            </div>

            <div class="block mt-2">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-2">
                <x-button type="submit" class="w-100 mb-2">
                    {{ __('Sign in') }}
                </x-button>
            </div>

            <div class="mt-4 text-center">
                @if (Route::has('password.request'))
                    <a class="text-sm font-weight-bold" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
