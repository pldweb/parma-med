<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | Parma</title>
    <link rel="shortcut icon" href="{{asset('img/logo-mark.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/flickity.min.css')}}">
</head>

<body>
<!-- Topbar -->
<section class="flex items-center justify-between gap-5 wrapper">
    <div class="flex items-center gap-3">
        <div class="bg-white rounded-full p-[5px] flex justify-center items-center">
            <img src="{{asset('img/avatar.svg')}}" class="size-[50px] rounded-full" alt="">
        </div>
        <div class="">
            <p class="text-base font-semibold capitalize text-primary">Angga King</p>
            <p class="text-sm">Customer</p>
        </div>
    </div>
    <div class="flex items-center gap-[10px]">
        <button type="button" class="p-2 bg-white rounded-full">
					<span class="relative">
						<!-- notification -->
						<img src="{{asset('img/ic-notification.svg')}}" class="size-5" alt="">
                        <!-- notification dot -->
						<span class="block rounded-full size-1.5 bg-primary absolute top-0 right-0 -translate-x-1/2"></span>
					</span>
        </button>
        <button type="button" class="p-2 bg-white rounded-full">
            <img src="{{asset('img/ic-shopping-bag.svg')}}" class="size-5" alt="">
        </button>
    </div>
</section>

<!-- Floating navigation -->
@include('components.site-floating')

<!-- Header -->
@include('components.site-header')

<!-- Your last order -->
<section class="wrapper">
    <div
        class="flex justify-between gap-5 items-center bg-lilac py-3.5 px-4 rounded-2xl relative bg-left bg-no-repeat bg-cover bg-[url('/public/assets/svgs/pipeline.svg')]">
        <p class="text-base font-bold">
            Your last order has <br>
            been proceed
        </p>
        <img src="{{asset('img/nekodicine.svg')}}" class="w-[90px] h-[70px]" alt="">
    </div>
</section>

<!-- Categories -->
<section class="wrapper !px-0 flex flex-col gap-2.5">
    <p class="px-4 text-base font-bold">Categories</p>
    <div id="categoriesSlider" class="relative">
        <!-- Diabetes -->
        <div class="inline-flex gap-2.5 items-center py-3 px-3.5 relative bg-white rounded-xl mr-4">
            <img src="{{asset('img/ic-diabetes-filled.svg')}}" class="size-10" alt="">
            <a href="#" class="text-base font-semibold truncate stretched-link">
                Diabetes
            </a>
        </div>
        <!-- Fitness -->
        <div class="inline-flex gap-2.5 items-center py-3 px-3.5 relative bg-white rounded-xl mr-4">
            <img src="{{asset('img/ic-fitness-filled.svg')}}" class="size-10" alt="">
            <a href="#" class="text-base font-semibold truncate stretched-link">
                Fitness
            </a>
        </div>
        <!-- Vitamins -->
        <div class="inline-flex gap-2.5 items-center py-3 px-3.5 relative bg-white rounded-xl mr-4">
            <img src="{{asset('img/ic-vitamins-filled.svg')}}" class="size-10" alt="">
            <a href="#" class="text-base font-semibold truncate stretched-link">Vitamins</a>
        </div>
        <!-- Surgicals -->
        <div class="inline-flex gap-2.5 items-center py-3 px-3.5 relative bg-white rounded-xl mr-4">
            <img src="{{asset('img/ic-surgicals-filled.svg')}}" class="size-10" alt="">
            <a href="#" class="text-base font-semibold truncate stretched-link">
                Surgicals
            </a>
        </div>
    </div>
</section>

<!-- Latest Products -->
<section class="wrapper !px-0 flex flex-col gap-2.5">
    <p class="px-4 text-base font-bold">
        Latest Products
    </p>
    <div id="proudctsSlider" class="relative">
        <!-- Panadomal -->
        <div
            class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
            <img src="{{asset('img/product-1.webp')}}" class="h-[100px] w-full object-contain" alt="">
            <div>
                <a href="details.html" class="text-base font-semibold w-[120px] truncate stretched-link block">
                    Panadomal
                </a>
                <p class="text-sm truncate text-grey">
                    Rp 56000
                </p>
            </div>
        </div>
        <!-- Softovac Rami -->
        <div
            class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
            <img src="{{asset('img/product-4.webp')}}" class="h-[100px] w-full object-contain" alt="">
            <div>
                <a href="details.html" class="text-base font-semibold w-[120px] truncate stretched-link block">
                    Softovac Rami
                </a>
                <p class="text-sm truncate text-grey">
                    Rp 290000
                </p>
            </div>
        </div>
        <!-- Softovac Rami -->
        <div
            class="rounded-2xl bg-white py-3.5 pl-4 pr-[22px] inline-flex flex-col gap-4 items-start mr-4 relative w-[158px]">
            <img src="{{asset('img/product-2.webp')}}" class="h-[100px] w-full object-contain" alt="">
            <div>
                <a href="details.html" class="text-base font-semibold w-[120px] truncate stretched-link block">
                    Softovac Rami
                </a>
                <p class="text-sm truncate text-grey">
                    Rp 290000
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Explore -->
<section class="wrapper">
    <div
        class="bg-lilac py-3.5 px-5 rounded-2xl relative bg-right-bottom bg-no-repeat bg-[url('/public/assets/svgs/doctor-help.svg')] bg-auto">
        <img src="{{asset('img/cloud.svg')}}" class="-ml-1.5 mb-1.5" alt="">
        <div class="flex flex-col gap-4 mb-[23px]">
            <p class="text-base font-bold">
                Explore great doctors <br>
                for your better life
            </p>
            <a href="#"
               class="rounded-full bg-white text-primary flex w-max gap-2.5 px-6 py-2 justify-center items-center text-base font-bold">
                Explore
            </a>
        </div>
    </div>
</section>

<!-- Most Purchased -->
<section class="wrapper flex flex-col gap-2.5 pb-40">
    <p class="text-base font-bold">
        Most Purchased
    </p>
    <div class="flex flex-col gap-4">
        <!-- Softovac Rami -->
        <div class="py-3.5 pl-4 pr-[22px] bg-white rounded-2xl flex gap-1 items-center relative">
            <img src="{{asset('img/product-2.webp')}}" class="w-full max-w-[70px] max-h-[70px] object-contain"
                 alt="">
            <div class="flex flex-wrap items-center justify-between w-full gap-1">
                <div class="flex flex-col gap-1">
                    <a href="details.html"
                       class="text-base font-semibold stretched-link whitespace-nowrap w-[150px] truncate">
                        Softovac Rami
                    </a>
                    <p class="text-sm text-grey">
                        Rp 290.000
                    </p>
                </div>
                <div class="flex">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                </div>
            </div>
        </div>
        <!-- Enoki Pro -->
        <div class="py-3.5 pl-4 pr-[22px] bg-white rounded-2xl flex gap-1 items-center relative">
            <img src="{{asset('img/product-1.webp')}}" class="w-full max-w-[70px] max-h-[70px] object-contain"
                 alt="">
            <div class="flex flex-wrap items-center justify-between w-full gap-1">
                <div class="flex flex-col gap-1">
                    <a href="details.html"
                       class="text-base font-semibold stretched-link whitespace-nowrap w-[150px] truncate">
                        Enoki Softovac
                    </a>
                    <p class="text-sm text-grey">
                        Rp 34.500.000
                    </p>
                </div>
                <div class="flex">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                </div>
            </div>
        </div>
        <!-- Veetax Bora -->
        <div class="py-3.5 pl-4 pr-[22px] bg-white rounded-2xl flex gap-1 items-center relative">
            <img src="{{asset('img/product-4.webp')}}" class="w-full max-w-[70px] max-h-[70px] object-contain"
                 alt="">
            <div class="flex flex-wrap items-center justify-between w-full gap-1">
                <div class="flex flex-col gap-1">
                    <a href="details.html"
                       class="text-base font-semibold stretched-link whitespace-nowrap w-[150px] truncate">
                        Veetax Bora
                    </a>
                    <p class="text-sm text-grey">
                        Rp 899.000
                    </p>
                </div>
                <div class="flex">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                    <img src="{{asset('img/star.svg')}}" class="size-[18px]" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('script/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('script/flickity.pkgd.min.js')}}"></script>

<script src="{{asset('script/sliderConfig.js')}}" type="module"></script>
<script src="{{asset('script/searchProductListener.js')}}" type="module"></script>
</body>

</html>
