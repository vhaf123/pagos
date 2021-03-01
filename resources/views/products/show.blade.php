<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                @livewire('coupons', ['product' => $product])
            </div>

            <div class="col-span-5">
                @livewire('method-payment', ['product' => $product])
            </div>
        </div>


    </div>


  

</x-app-layout>
