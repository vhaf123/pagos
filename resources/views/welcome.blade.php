<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="grid grid-cols-3 gap-6">
            @foreach ($products as $product)

                <div class="card">
                    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                        <h1 class="text-gray-200 font-bold text-xl">{{$product->price}} USD</h1>
                        <a href="{{route('products.show', $product)}}" class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Comprar</a>
                    </div>

                    <img class="h-56 w-full object-cover"
                            src="{{Storage::url($product->image)}}"
                            alt="NIKE AIR">

                    <div class="card-body">
                        <h1 class="text-gray-900 font-bold text-xl uppercase">{{$product->title}}</h1>
                        <p class="text-gray-600 text-sm mt-1">{{Str::limit($product->descripcion, 150)}}</p>
                    </div>
                </div>
                
            @endforeach
        </div>

        <div class="mt-6">
            {{$products->links()}}
        </div>
    </div>

</x-app-layout>
