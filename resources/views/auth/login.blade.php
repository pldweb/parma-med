@extends('layouts.site')
@section('content')
    <div class="flex flex-col items-center px-6 py-10 min-h-dvh">
        <img src="{{asset('img/logo.svg')}}" class="mb-[53px]" alt="">
        <form id="loginForm" class="mx-auto max-w-[345px] w-full p-6 bg-white rounded-3xl mt-auto" id="deliveryForm">
            @csrf
            <div class="flex flex-col gap-5">
                <div id="alert-container"></div>

                <p class="text-[22px] font-bold">Sign In</p>
                <!-- Email Address -->
                <div class="flex flex-col gap-2.5">
                    <label for="email" class="text-base font-semibold">Email Address</label>
                    <input type="email" name="email" id="email__" class="form-input" style="background-image: url('{{asset('img/ic-email.svg')}}')" placeholder="Your email address">
                </div>
                <!-- Password -->
                <div class="flex flex-col gap-2.5">
                    <label for="password" class="text-base font-semibold">Password</label>
                    <input type="password" name="password" id="password__" class="form-input" style="background-image: url('{{asset('img/ic-lock.svg')}}')" placeholder="Protect your password">
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

    <script>
        $("#loginForm").on("submit", function(e) {
            e.preventDefault(); // Mencegah refresh halaman

            $.ajax({
                url: "{{ route('login') }}",
                type: "POST",
                data: {
                    email: $("#email__").val(),
                    password: $("#password__").val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response)
                    $('#alert-container').html(response)
                },
                error: function(response) {
                    $('#alert-container').html(response)
                }
            });
        });
    </script>
@endsection



