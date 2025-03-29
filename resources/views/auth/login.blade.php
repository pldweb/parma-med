{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

@extends('layouts.site')
@section('content')
    <div class="flex flex-col items-center px-6 py-10 min-h-dvh">
        <img src="{{asset('img/logo.svg')}}" class="mb-[53px]" alt="">
        <form action="{{route('login')}}" method="POST" class="mx-auto max-w-[345px] w-full p-6 bg-white rounded-3xl mt-auto" id="deliveryForm">
            @csrf
            <div class="flex flex-col gap-5">
                <p class="text-[22px] font-bold">Sign In</p>
                <!-- Email Address -->
                <div class="flex flex-col gap-2.5">
                    <label for="email" class="text-base font-semibold">Email Address</label>
                    <input type="email" name="email" id="email__" class="form-input bg-[url('{{asset('img/ic-email.svg')}}]" placeholder="Your email address">
                </div>
                <!-- Password -->
                <div class="flex flex-col gap-2.5">
                    <label for="password" class="text-base font-semibold">Password</label>
                    <input type="password" name="password" id="password__" class="form-input bg-[url('{{asset('img/ic-lock.svg')}}]" placeholder="Protect your password">
                </div>
                <button type="submit" class="inline-flex text-white font-bold text-base bg-primary rounded-full whitespace-nowrap px-[30px] py-3 justify-center items-center">
                    Sign In
                </button>
            </div>
        </form>
        <a href="{{route('register')}}" class="font-semibold text-base mt-[30px] underline">
            Create New Account
        </a>
    </div>
@endsection



