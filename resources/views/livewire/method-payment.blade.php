<div>
    <div class="card">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <h1 class="text-lg font-bold text-gray-700">Métodos de pago:</h1>
                <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
            </div>

            {{-- {{$cupon}} --}}
            <form action="{{ route('stripe.pay', $product) }}" class="mt-4" autocomplete="off" method="POST"
                id="card-form">
                @csrf

                <input id="payment-method-id" name="paymentMethodId" type="hidden">
                
                <div class="form-group">
                    <label class="form-label">Nombre de la tarjeta</label>
                    <input wire:model="name" class="form-control" id="card-holder-name" type="text"
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

                <button class="btn btn-primary" wire:click="$emit('postAdded')">Prueba</button>
            </form>

        </div>
    </div>

    @slot('js')
        <script>
            
            stripe();

            Livewire.on('postAdded', function() {
                stripe();
            })

            function stripe(){

                const stripe = Stripe('pk_test_pV6a8p89xYseknkb3knrqJZf00agbPkHNG');

                const elements = stripe.elements();
                const cardElement = elements.create('card');
                

                cardElement.mount('#card-element');

                //paymentMethod
                const cardHolderName = document.getElementById('card-holder-name');
                const cardForm = document.getElementById('card-form');

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
                        Livewire.emit('pay', paymentMethod.id);
                    }
                });
            }

        </script>
    @endslot
</div>
