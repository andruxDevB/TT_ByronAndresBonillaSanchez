<x-guest-layout>

    <x-authentication-card-logo></x-authentication-card-logo>

    <x-authentication-card>
        <x-slot name="cardheader">
            <x-authentication-card-header h2="Reset password" p="You will receive an e-mail" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-input type="email" id="email" name="email" class="form-control" label="{{ __('Email') }}" :value="old('email')" :required="true" :autofocus="true"/>
            </div>

            <div class="mt-2">
                <x-button type="submit" class="w-100 mb-2">
                    {{ __('Email Password Reset Link') }}
                </x-button>                
            </div>
            <div class="mt-4 text-center">
                <a class="text-sm font-weight-bold" href="{{ route('login') }}">
                    {{ __('Sign in') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
