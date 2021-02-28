<div>
    <article class="card">
        <form action="" autocomplete="off">
            <div class="card-body">
                <h1 class="text-gray-700 text-lg font-bold mb-4">Agregar método de pago</h1>

                <div class="flex">

                    <p class="text-gray-700">Información de tarjeta</p>
                    
                    <div class="flex-1 ml-6">
                        
                        <div class="form-group">
                            <input class="form-control" id="card-holder-name"
                                placeholder="Nombre del titular de la tarjeta">
                        </div>

                        <!-- Stripe Elements Placeholder -->
                        <div>
                            <div wire:model="info" class="form-control" id="card-element"></div>
                            <span id="cardErrors"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-gray-50 flex justify-end">


                <button class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
                    Update Payment Method
                </button>
            </div>
        </form>
    </article>



    @push('js')

        {{-- <script>

            stripe();

            Livewire.on('postAdded', function() {

                document.getElementById('card-holder-name').value = "";
                stripe();
                
            })

            function stripe() {
                const stripe = Stripe('pk_test_pV6a8p89xYseknkb3knrqJZf00agbPkHNG');

                const elements = stripe.elements();
                const cardElement = elements.create('card');

                cardElement.mount('#card-element');

                const cardHolderName = document.getElementById('card-holder-name');
                const cardButton = document.getElementById('card-button');
                const clientSecret = cardButton.dataset.secret;

                cardButton.addEventListener('click', async (e) => {

                    e.preventDefault();

                    const {
                        setupIntent,
                        error
                    } = await stripe.confirmCardSetup(
                        clientSecret, {
                            payment_method: {
                                card: cardElement,
                                billing_details: {
                                    name: cardHolderName.value
                                }
                            }
                        }
                    );

                    if (error) {
                        // Display "error.message" to the user...
                    } else {
                        
                        /* Livewire.emit('createPaymentMethod', setupIntent.payment_method); */
                        Livewire.emit('paymentMethods2');
                    }
                });
            }

        </script> --}}

    @endpush
</div>
