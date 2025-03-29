<section class="flex items-center justify-between gap-5 wrapper">
    <div class="flex items-center gap-3">
        <div class="bg-white rounded-full p-[5px] flex justify-center items-center">
            <img src="{{asset('img/avatar.svg')}}" class="size-[50px] rounded-full" alt="">
        </div>
        <div class="">
            <p class="text-base font-semibold capitalize text-primary">{{Auth::user() ? Auth::user()->name : 'Tanpa Nama'}}</p>
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
