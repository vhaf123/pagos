@props(['name', 'price'])

@if (auth()->user()->hasDefaultPaymentMethod())

    @if (auth()->user()->subscribed($name))

        @if (auth()->user()->subscribedToPlan($price, $name))

            @if (auth()->user()->subscription($name)->cancelled())

                <a wire:click="resumingSubscriptions('{{$name}}')"
                    class="cursor-pointer">
                    <p class="w-full py-4 bg-red-600 mt-8 rounded-xl text-white">
                        <span class="font-medium">
                            Reanudar suscripción
                        </span>
                    </p>
                </a>

            @else

                <a wire:click="cancellingSubscriptions('{{$name}}')"
                    class="cursor-pointer">
                    <p class="w-full py-4 bg-red-600 mt-8 rounded-xl text-white">
                        <span class="font-medium">
                            Cancelar subscribción
                        </span>
                    </p>
                </a>

            @endif

        @else

            <a wire:click="changingPlans('{{$name}}', '{{$price}}')"
                class="cursor-pointer">
                <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                    <span class="font-medium">
                        Cambiar de plan
                    </span>
                </p>
            </a>

        @endif
    @else
        <a wire:click="newSubscription('{{$name}}', '{{$price}}')"
            class="cursor-pointer">
            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                <span class="font-medium">
                    Suscribirse
                </span>
            </p>
        </a>
    @endif

@else
    
    <a class="cursor-pointer">
        <p class="w-full py-4 bg-gray-600 mt-8 rounded-xl text-white">
            <span class="font-medium">
                Agregue un método de pago
            </span>
        </p>
    </a>

@endif
