<div>
    <div class="card">
        <div class="card-body">

            @foreach ($paymentMethods as $paymentMethod)
                <article class="flex justify-between items-center py-2 hover:bg-blue-50 px-2">
                    <div class="flex-1 text-sm text-gray-700">
                        <h1><span class="font-bold">{{ $paymentMethod->billing_details->name }}</span>
                            xxxx-{{ $paymentMethod->card->last4 }} @if (auth()->user()->defaultPaymentMethod()->id == $paymentMethod->id)
                                (default)
                            @endif
                        </h1>
                        <p>Expira {{ $paymentMethod->card->exp_month }}/{{ $paymentMethod->card->exp_year }}</p>
                    </div>


                    <div
                        class="grid grid-cols-3 divide-x divide-gray-200 border border-gray-200 rounded-md text-xs text-gray-500">
                        <i class="fas fa-pen  p-3 cursor-pointer hover:bg-white hover:text-gray-700"></i>
                        <i class="fas fa-trash p-3 cursor-pointer hover:bg-white hover:text-gray-700"></i>
                        <i class="fas fa-star p-3 cursor-pointer hover:bg-white hover:text-gray-700"></i>
                    </div>

                    
                </article>
                <hr>
            @endforeach
        </div>
    </div>
</div>
