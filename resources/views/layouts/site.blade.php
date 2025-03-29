<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Parma</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/logo-mark.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/flickity.min.css')}}">

    <script src="{{asset('script/jquery-3.7.1.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::sweetalert')
</head>
<body>

    <main class="master-element">
        @yield('content')
    </main>

{{--Script--}}
<script src="{{asset('script/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('script/sliderConfig.js')}}" type="module"></script>
<script src="{{asset('script/searchProductListener.js')}}" type="module"></script>
</body>

</html>
