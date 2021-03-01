<div class="relative">
    <div wire:loading>
        <div class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 flex items-center justify-center">
            <!-- component -->
            <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-20 w-20"></div>
        </div>
    </div>

    <div class="card">

        <div class="card-body divide-y divide-gray-200">

            @foreach ($paymentMethods as $paymentMethod)

            <article class="flex justify-between items-center py-2 hover:bg-blue-50 px-2">
                <div class="flex-1 text-sm text-gray-700">
                    <h1><span class="font-bold">{{ $paymentMethod->billing_details->name }}</span> xxxx-{{ $paymentMethod->card->last4 }} @if (auth()->user()->defaultPaymentMethod()->id == $paymentMethod->id)(default)@endif
                    </h1>
                    <p>Expira {{ $paymentMethod->card->exp_month }}/{{ $paymentMethod->card->exp_year }}</p>
                </div>
            
            
                <div class="divide-x divide-gray-200 border border-gray-200 rounded-md text-xs text-gray-500">
                    <i class="fas fa-star p-3 cursor-pointer hover:bg-white hover:text-gray-700" wire:click="defaultPaymentMethod('{{$paymentMethod->id}}')"></i>
                    <i class="fas fa-trash p-3 cursor-pointer hover:bg-white hover:text-gray-700" wire:click="deletePaymentMethod('{{$paymentMethod->id}}')"></i>
                </div>
            
            </article>
                
            @endforeach
        </div>
    </div>
</div>
