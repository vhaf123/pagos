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
            <div class="">

                <div class="pt-12 flex flex-row">
                    <!-- Basic Card -->
                    <article class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
                        <h1 class="text-black font-semibold text-2xl">Mensual</h1>
                        <p class="pt-2 tracking-wide">
                            <span class="text-gray-400 align-top">$ </span>
                            <span class="text-3xl font-semibold">10</span>
                            <span class="text-gray-400 font-medium">/ user</span>
                        </p>
                        <hr class="mt-4 border-1">
                        <div class="pt-8">
                            <p class="font-semibold text-gray-400 text-left">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    Get started with <span class="text-black">messaging</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    Flexible <span class="text-black">team meetings</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    <span class="text-black">5 TB</span> cloud storage
                                </span>
                            </p>

                            <a href="#" class="">
                                <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                    <span class="font-medium">
                                        Choose Plan
                                    </span>
                                    <span class="pl-2 material-icons align-middle text-sm">
                                        east
                                    </span>
                                </p>
                            </a>
                        </div>
                    </article>

                    <!-- StartUp Card -->
                    <article
                        class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125">
                        <h1 class="text-white font-semibold text-2xl">Semestral</h1>
                        <p class="pt-2 tracking-wide">
                            <span class="text-gray-400 align-top">$ </span>
                            <span class="text-3xl font-semibold">24</span>
                            <span class="text-gray-400 font-medium">/ user</span>
                        </p>
                        <hr class="mt-4 border-1 border-gray-600">
                        <div class="pt-8">
                            <p class="font-semibold text-gray-400 text-left">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    All features in <span class="text-white">Basic</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    Flexible <span class="text-white">call scheduling</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    <span class="text-white">15 TB</span> cloud storage
                                </span>
                            </p>

                            <a href="#" class="">
                                <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                    <span class="font-medium">
                                        Choose Plan
                                    </span>
                                    <span class="pl-2 material-icons align-middle text-sm">
                                        east
                                    </span>
                                </p>
                            </a>
                        </div>
                        <div class="absolute top-4 right-4">
                            <p class="bg-blue-700 font-semibold px-4 py-1 rounded-full uppercase text-xs">Popular</p>
                        </div>
                    </article>

                    <!-- Enterprise Card -->
                    <article class="w-96 p-8 bg-white text-center rounded-3xl pl-16 shadow-xl">
                        <h1 class="text-black font-semibold text-2xl">Anual</h1>
                        <p class="pt-2 tracking-wide">
                            <span class="text-gray-400 align-top">$ </span>
                            <span class="text-3xl font-semibold">35</span>
                            <span class="text-gray-400 font-medium">/ user</span>
                        </p>
                        <hr class="mt-4 border-1">
                        <div class="pt-8">
                            <p class="font-semibold text-gray-400 text-left">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    All features in <span class="text-black">Startup</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    Growth <span class="text-black">oriented</span>
                                </span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                                <span class="material-icons align-middle">
                                    done
                                </span>
                                <span class="pl-2">
                                    <span class="text-black">Unlimited</span> cloud storage
                                </span>
                            </p>

                            <a href="#" class="">
                                <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                    <span class="font-medium">
                                        Choose Plan
                                    </span>
                                    <span class="pl-2 material-icons align-middle text-sm">
                                        east
                                    </span>
                                </p>
                            </a>
                        </div>
                    </article>
                </div>
            </div>

        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                @livewire('payment-method.create')
            </div>

            <div class="mt-8">
                @livewire('payment-method.index')
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
                document.getElementById('spinner').classList.add("hidden");
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

                        document.getElementById('cardErrors').textContent = error.message;

                    } else {

                        document.getElementById('spinner').classList.remove("hidden");
                        Livewire.emit('paymentMethodCreate', setupIntent.payment_method);
                        
                    }
                });
            }

        </script>

    @endslot
</x-app-layout>
