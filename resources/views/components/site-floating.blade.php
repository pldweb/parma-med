<nav class="fixed z-50 bottom-[30px] bg-black rounded-[50px] pt-[18px] px-10 left-1/2 -translate-x-1/2 w-80">
    <div class="flex items-center justify-center gap-5 flex-nowrap">
        <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group is-active">
            <img src="{{asset('img/ic-grid.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary" alt="">
            <p class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
                Home
            </p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('img/ic-location.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary"
                 alt="">
            <p class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
                Stores
            </p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('img/ic-note.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary" alt="">
            <p class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
                Orders
            </p>
        </a>
        <a href="#" class="flex flex-col items-center justify-center gap-1 px-1 group">
            <img src="{{asset('img/ic-profile.svg')}}" class="filter-to-grey group-[.is-active]:filter-to-primary"
                 alt="">
            <p class="border-b-4 border-transparent group-[.is-active]:border-primary pb-3 text-xs text-center font-semibold text-grey group-[.is-active]:text-primary">
                Profile
            </p>
        </a>
    </div>
</nav>
