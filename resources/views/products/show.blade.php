<x-app-layout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <div class="card">
                    <div class="card-body ">
                        <div class="flex">
                            <img class="w-48 h-28 object-cover" src="{{ Storage::url($product->image) }}" alt="">

                            <div class="ml-4 pt-4 flex-1 flex justify-between">

                                <h1 class="font-bold text-lg uppercase">{{ $product->title }}</h1>
                                <p class="font-bold text-gray-500">{{ $product->price }} USD</p>

                            </div>
                        </div>

                        <hr class="my-4">
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex saepe quidem
                            voluptate voluptatum rem eos inventore officia ad, laboriosam quaerat ut, voluptas facilis
                            corporis deleniti quisquam eum <a class="text text-blue-500" href="">Terminos y
                                condiciones</a></p>
                    </div>
                </div>
            </div>

            <div class="col-span-5">
                <div class="card">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <h1 class="text-lg font-bold text-gray-700">Métodos de pago:</h1>
                            <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                class="h-8 ml-3">
                        </div>


                        <form action="{{route('stripe.pay', $product)}}" class="mt-4" autocomplete="off" method="POST" id="card-form">
                            @csrf

                            <input id="payment-method-id" name="paymentMethodId" type="hidden">

                            <div class="form-group">
                                <label class="form-label">Nombre de la tarjeta</label>
                                <input class="form-control" id="card-holder-name" type="text"
                                    placeholder="Ingrese el nombre del titular de la tarjeta" required>
                            </div>

                            <!-- Stripe Elements Placeholder -->
                            <div class="form-group">
                                <label class="form-label">Número de tarjeta</label>
                                <div class="form-control" id="card-element"></div>

                                <span id="cardErrors"></span>
                            </div>

                            <button id="card-button" class="btn btn-primary">
                                Process Payment
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>


    @slot('js')
        <script>
            const stripe = Stripe('pk_test_pV6a8p89xYseknkb3knrqJZf00agbPkHNG');

            const elements = stripe.elements();
            const cardElement = elements.create('card');
            

            cardElement.mount('#card-element');

            //paymentMethod
            const cardHolderName = document.getElementById('card-holder-name');
            const cardForm = document.getElementById('card-form');
            /* const paymentMethodId = elements.create('payment-method-id'); */

            cardForm.addEventListener('submit', async (e) => {

                e.preventDefault(); 
                

                const {
                    paymentMethod,
                    error
                } = await stripe.createPaymentMethod(
                    'card', cardElement, {
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                );

                if (error) {
                    
                } else {
                    const paymentMethodId = document.getElementById('payment-method-id');
                    paymentMethodId.value = paymentMethod.id;
                    
                    cardForm.submit();
                }
            });

        </script>
    @endslot

</x-app-layout>
