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

                @foreach($products as $product)
                    <div class="item-card flex flex-row justify-between items-center" id="line-{{$product->id}}">
                        <div class="flex flex-row items-center gap-4">
                            <img src="{{Storage::url($product->photo)}}" alt="" class="w-[80px] h-[80px]">
                            <div>
                                <h3 class="font-bold">{{$product->name}}</h3>
                                <p class="text-base text-slate-500">Rp {{$product->price}}</p>
                            </div>
                        </div>
                        <p class="text-base text-slate-500">{{$product->category->name}}</p>
                        <div class="flex flex-row items-center gap-x-1">
                            <a href="{{route('admin.products.edit', $product)}}" class="font-bold py-3 px-5 rounded-full text-white bg-indigo-500">Edit</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{$product->id}}" class="font-bold py-3 px-5 rounded-full text-white bg-red-500">DELETE</a>
                        </div>
                    </div>
                @endforeach

                    <script>
                        $('body').on('click', '#btn-delete-post', function() {
                            let product_id = $(this).data('id')
                            let token = $('meta[name="csrf-token"]').attr("content")

                            Swal.fire({
                                title: 'Apakah kamu yakin?',
                                text: 'Ingin hapus data?',
                                icon: 'Warning',
                                showCancelButton: true,
                                cancelButtonText: 'TIDAK',
                                confirmButtonText: 'YA, HAPUS!'
                            }).then((result) => {
                                if(result.isConfirmed){
                                    console.log('test')

                                    $.ajax({
                                        url: `/admin/products/${product_id}`,
                                        method: "DELETE",
                                        cache: false,
                                        data: {
                                            "_token": token
                                        },
                                        success: function(response){
                                            Swal.fire({
                                                type: 'success',
                                                icon: 'success',
                                                title: `${response.message}`,
                                                showConfirmationButton: false,
                                                timer: 3000,
                                            });

                                            $(`#line-${product_id}`).remove()
                                        }
                                    })
                                }
                            })
                        })
                    </script>

            </div>
        </div>
    </div>
</x-app-layout>
