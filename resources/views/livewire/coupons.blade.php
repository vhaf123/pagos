<div class="card">
    <div class="card-body ">
        <div class="flex">
            <img class="w-48 h-28 object-cover" src="{{ Storage::url($product->image) }}" alt="">

            <div class="ml-4 pt-4 flex-1">

                <div class="flex justify-between">
                    <h1 class="font-bold text-lg uppercase">{{ $product->title }}</h1>
                    @if ($descuento)
                        <p class="font-bold text-gray-500">{{ ($product->price) * (100 - $descuento) / 100 }} USD</p>
                    @else
                        <p class="font-bold text-gray-500">{{ $product->price }} USD</p>
                    @endif
                </div>

                @if ($descuento)
                    
                @else
                    <div class="flex">
                        <input wire:model="cupon" type="text" placeholder="Ingresar cupon" class="form-control flex-1">
                        <button wire:click="apply" class="btn btn-primary ml-1">Aplicar</button>
                    </div>

                    @if ($error)
                        <p class="invalid-feedback">Cupón no valido</p>
                    @endif
                @endif


            </div>
        </div>

        <hr class="my-4">
        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex saepe quidem
            voluptate voluptatum rem eos inventore officia ad, laboriosam quaerat ut, voluptas facilis
            corporis deleniti quisquam eum <a class="text text-blue-500" href="">Terminos y
                condiciones</a></p>
    </div>
</div>