<x-layouts.app :title="__('Dashboard')">

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-4xl font-bold mt-5 text-neutral-900  dark:text-white">Bienvenido, {{ auth()->user()->name }} </h1>
        <h2 class="text-md  mb-10 text-neutral-800 dark:text-neutral-200">Resumen del contenido mostrado en la web</h2>

        <div class="grid auto-rows-min gap-4 md:grid-cols-3">

            <a href="{{ route('dashboard.heladerias') }}">
                    <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <div class="p-5  flex flex-col justify-between h-full">
                        <div class="flex items-center justify-between gap-10">
                            <h3 class="dark:text-white text-xl">Heladerias Activas</h3>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-brand-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>

                        </div>
                        <p class="text-4xl font-bold">Total: {{ $heladerias->count() }}</p>
                    </div>
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </a>

            <a href="{{ route('dashboard.heladerias') }}">
                    <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <div class="p-5  flex flex-col justify-between h-full">
                        <div class="flex items-center justify-between gap-10">
                            <h3 class="dark:text-white text-xl">Sabores</h3>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-brand-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>


                        </div>
                        <p class="text-4xl font-bold">Total: {{ $sabores->count() }}</p>
                    </div>
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </a>

           <!-- <a href=" route('dashboard.heladerias') ">
                    <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <div class="p-5  flex flex-col justify-between h-full">
                        <div class="flex items-center justify-between gap-10">
                            <h3 class="dark:text-white text-xl">Tortas Heladas</h3>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-brand-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75-1.5.75a3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0L3 16.5m15-3.379a48.474 48.474 0 0 0-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 0 1 3 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 0 1 6 13.12M12.265 3.11a.375.375 0 1 1-.53 0L12 2.845l.265.265Zm-3 0a.375.375 0 1 1-.53 0L9 2.845l.265.265Zm6 0a.375.375 0 1 1-.53 0L15 2.845l.265.265Z" />
                            </svg>

                        </div>
                        <p class="text-4xl font-bold">Total:  /*$tortas->count()*/ </p>
                    </div>
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </a>-->
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <!-- Formulario landing -->
            <div class="w-full p-6 bg-white dark:bg-neutral-800 rounded-xl">
                <flux:heading size="xl" level="1">Configuración de la Landing</flux:heading>
                <flux:subheading>Cambia los textos principales y de las tarjetas sin tocar la base de datos.</flux:subheading>

                <flux:separator class="my-6" />

                <form action="{{ route('dashboard.landing.update') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 gap-6">
                        <flux:field>
                            <flux:label>Título Principal</flux:label>
                            <flux:input name="titulo" value="{{ $config['titulo'] ?? '' }}" placeholder="Ej: Tu propio negocio Sanfra" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Descripción / Subtítulo</flux:label>
                            <flux:textarea name="descripcion" rows="4" placeholder="Describe el modelo de negocio...">{{ $config['descripcion'] ?? '' }}</flux:textarea>
                        </flux:field>
                    </div>

                    <flux:separator content="Títulos de las Tarjetas (Cards)" class="my-8" />

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <flux:field>
                            <flux:label>Tarjeta 1 (Inversión)</flux:label>
                            <flux:input name="card_1" value="{{ $config['card_1'] ?? '' }}" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Tarjeta 2 (Modelo)</flux:label>
                            <flux:input name="card_2" value="{{ $config['card_2'] ?? '' }}" />
                        </flux:field>

                        <flux:field>
                            <flux:label>Tarjeta 3 (Acompañamiento)</flux:label>
                            <flux:input name="card_3" value="{{ $config['card_3'] ?? '' }}" />
                        </flux:field>
                    </div>

                    <flux:separator content="Contacto" class="my-8" />

                    <flux:field>
                        <flux:label>WhatsApp (Solo números con código de país)</flux:label>
                        <flux:input name="whatsapp" value="{{ $config['whatsapp'] ?? '' }}" placeholder="Ej: 5491122334455" />
                    </flux:field>

                    <flux:separator content="Sección de Detalles (Inversión y Logística)" class="my-8" />

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4 p-4 border rounded-lg dark:border-neutral-700">
                            <flux:field>
                                <flux:label>Título Inversión</flux:label>
                                <flux:input name="inv_titulo" value="{{ $config['inv_titulo'] ?? '' }}" />
                            </flux:field>
                            <flux:field>
                                <flux:label>Descripción Inversión</flux:label>
                                <flux:textarea name="inv_desc" rows="3">{{ $config['inv_desc'] ?? '' }}</flux:textarea>
                            </flux:field>
                        </div>

                        <div class="space-y-4 p-4 border rounded-lg dark:border-neutral-700">
                            <flux:field>
                                <flux:label>Título Logística</flux:label>
                                <flux:input name="log_titulo" value="{{ $config['log_titulo'] ?? '' }}" />
                            </flux:field>
                            <flux:field>
                                <flux:label>Descripción Logística</flux:label>
                                <flux:textarea name="log_desc" rows="3">{{ $config['log_desc'] ?? '' }}</flux:textarea>
                            </flux:field>
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <flux:button type="submit" variant="primary" icon="check-circle">
                            Guardar Cambios
                        </flux:button>
                    </div>
                </form>
            </div>
            <!-- /Formulario landing -->

        </div>
    </div>

</x-layouts.app>
