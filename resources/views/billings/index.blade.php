<x-app-layout>

    @slot('css')
        <style>
            .loader {
                border-top-color: #3498db;
                -webkit-animation: spinner 1.5s linear infinite;
                animation: spinner 1.5s linear infinite;
            }

            @-webkit-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spinner {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

        </style>
    @endslot

    <div class="py-12">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center mb-20">
            
            @livewire('subscriptions')

            

        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                @livewire('payment-method-create')
            </div>

            <div class="my-8">
                @livewire('payment-method-list')
            </div>

            <div>
                @livewire('invoices')
            </div>
        </div>

    </div>

    @slot('js')

        <script>
            document.addEventListener('livewire:load', function() {
                stripe();
            })

            Livewire.on('restartStripe', function() {
                document.getElementById("card-form").reset();
                stripe();
            })

        </script>


        <script>
            function stripe() {
                const stripe = Stripe('pk_test_pV6a8p89xYseknkb3knrqJZf00agbPkHNG');

                const elements = stripe.elements();
                const cardElement = elements.create('card');

                cardElement.mount('#card-element');

                //Generar token
                const cardHolderName = document.getElementById('card-holder-name');
                const cardButton = document.getElementById('card-button');
                const clientSecret = cardButton.dataset.secret;

                cardButton.addEventListener('click', async (e) => {

                    e.preventDefault();
                    document.getElementById('card-button').disabled=true;

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

                        document.getElementById('card-button').disabled=false;
                        document.getElementById('cardErrors').textContent = error.message;

                    } else {
                        
                        Livewire.emit('paymentMethodCreate', setupIntent.payment_method);
                        
                    }
                });
            }

        </script>

    @endslot
</x-app-layout>
