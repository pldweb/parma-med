<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row w-full justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{route('admin.products.create')}}" class="py-3 px-5 rounded-full text-white bg-indigo-500">Add Product</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-col gap-y-5  p-10 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($categories as $category)
                    <div class="item-card flex flex-row justify-between items-center">
                        <img src="{{Storage::url($category->icon)}}" alt="" class="w-[80px] h-[80px]">
                        <h3 class="font-bold">{{$category->name}}</h3>
                        <div class="flex flex-row items-center gap-x-1">
                            <a href="{{route('admin.categories.edit', $category)}}" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-500">Edit</a>
                            <form action="{{route('admin.categories.destroy', $category)}}">
                                @csrf
                                @method('DELETE')
                                <button class="font-bold py-3 px-5 rounded-full text-white bg-red-500"> Delete </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
