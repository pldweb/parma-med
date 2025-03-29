<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">

                @if($errors->any())
                    @foreach(@$errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">{{$error}}</div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div class="mb-4">
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <x-input-label for="Category" :value="__('Category')" />
                        <select name="category_id" id="category_id" class="py-2 rounded pl-3 w-full border border-slate-300">
                            <option value="">Choose Category Product</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="mb-4">
                        <x-input-label for="about" :value="__('About')" />
                        <textarea name="about" id="about" rows="5" class="rounded w-full border border-slate-300"></textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>

                    <!-- Icon -->
                    <div>
                        <x-input-label for="photo" :value="__('Photo')" />
                        <x-text-input id="photo" class="block rounded-none mt-1 w-full" type="file" name="photo" required />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ms-4">
                            {{ __('Add New Product') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
