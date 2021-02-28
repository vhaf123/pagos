<article class="card relative">

    <div id="spinner" class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 flex items-center justify-center hidden">
        <!-- component -->
        <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-20 w-20"></div>
    </div>

    <form autocomplete="off" id="card-form">
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
                        <span id="cardErrors" class="invalid-feedback"></span>
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
