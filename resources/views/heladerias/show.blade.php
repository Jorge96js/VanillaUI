@extends('layouts.app')

@section('contenido')

<main class="py-20">

    {{-- TÍTULO --}}
    <h1 class="text-center text-4xl font-bold text-gray-800 my-10">
        {{ $heladeria->Nombre }}
    </h1>

    <section class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 px-5">

        {{-- IMAGEN --}}
        <div class="rounded-2xl overflow-hidden shadow-lg">

            <a href="{{ asset('storage/heladerias/' . $heladeria->Foto) }}" data-lightbox="heladeria">
                <img
                    src="{{ asset('storage/heladerias/' . $heladeria->Foto) }}"
                    alt="{{ $heladeria->Nombre }}"
                    class="w-full h-80 object-cover"
                >
            </a>
        </div>

        {{-- INFORMACIÓN --}}
        <div class="space-y-6">

            {{-- DATOS PRINCIPALES --}}
            <div class="space-y-2">
                <h2 class="text-2xl font-bold text-gray-700">Información</h2>

                <p class="text-gray-600 text-lg flex items-center gap-2">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="m 8 0 c -3.3125 0 -6 2.6875 -6 6 c 0.007812 0.710938 0.136719 1.414062 0.386719 2.078125 l -0.015625 -0.003906 c 0.636718 1.988281 3.78125 5.082031 5.625 6.929687 h 0.003906 v -0.003906 c 1.507812 -1.507812 3.878906 -3.925781 5.046875 -5.753906 c 0.261719 -0.414063 0.46875 -0.808594 0.585937 -1.171875 l -0.019531 0.003906 c 0.25 -0.664063 0.382813 -1.367187 0.386719 -2.078125 c 0 -3.3125 -2.683594 -6 -6 -6 z m 0 3.691406 c 1.273438 0 2.308594 1.035156 2.308594 2.308594 s -1.035156 2.308594 -2.308594 2.308594 c -1.273438 -0.003906 -2.304688 -1.035156 -2.304688 -2.308594 c -0.003906 -1.273438 1.03125 -2.304688 2.304688 -2.308594 z m 0 0" fill="#2e3436"></path> </g></svg>
                     <span>{{ $heladeria->Direccion }}</span>
                </p>

                <p class="text-gray-600 text-lg flex items-center gap-2">
                    <svg fill="#000000" width="16px" height="16px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M10 4L10 20L2.9941406 20L3.1464844 46L17.046875 46L19.046875 46L33 46L47 46L47 8L31 8L31 9L31 28L25.996094 28L25.996094 4.0078125L10 4 z M 12 6L23.996094 6.0078125L23.996094 28L19.013672 28L18.998047 20L18 20L12 20L12 6 z M 15 8L15 10L17 10L17 8L15 8 z M 19.039062 8L19.039062 10L21 10L21 8L19.039062 8 z M 33 10L45 10L45 44L39.960938 44L39.960938 40L38 40L38 44L33 44L33 28L33 10 z M 15 12L15 14L17 14L17 12L15 12 z M 19 12L19 14L21 14L21 12L19 12 z M 36 12.003906L36 14L38 14L38 12.003906L36 12.003906 z M 40.019531 12.007812L40.019531 14.021484L41.980469 14.021484L41.980469 12.007812L40.019531 12.007812 z M 36 16.015625L36 18L38 18L38 16.015625L36 16.015625 z M 40.019531 16.015625L40.019531 18L41.980469 18L41.980469 16.015625L40.019531 16.015625 z M 36 20L36 22L38 22L38 20L36 20 z M 40 20L40 22L41.980469 22L41.980469 20L40 20 z M 5.0058594 22L17.001953 22L17.013672 28L16.998047 28L17.041016 44L11.980469 44L11.980469 40L10.019531 40L10.019531 44L5.1347656 44L5.0058594 22 z M 8 24L8 26.015625L10.039062 26.015625L10.039062 24L8 24 z M 12.039062 24L12.039062 26.015625L14 26.015625L14 24L12.039062 24 z M 36 24.007812L36 25.998047L38 25.998047L38 24.007812L36 24.007812 z M 40 24.007812L40 25.998047L41.980469 25.998047L41.980469 24.007812L40 24.007812 z M 8 27.984375L8 30L10.039062 30L10.039062 27.984375L8 27.984375 z M 12.039062 27.984375L12.039062 30L14 30L14 27.984375L12.039062 27.984375 z M 36 27.992188L36 30.007812L38 30.007812L38 27.992188L36 27.992188 z M 40.019531 27.992188L40.019531 30.007812L41.980469 30.007812L41.980469 27.992188L40.019531 27.992188 z M 19.017578 30L31 30L31 44L26 44L26 40L24 40L24 44L19.042969 44L19.017578 30 z M 8 32L8 34.015625L10.039062 34.015625L10.039062 32L8 32 z M 12.039062 32L12.039062 34.015625L14 34.015625L14 32L12.039062 32 z M 22 32L22 34.015625L24 34.015625L24 32L22 32 z M 26 32L26 34.015625L28 34.015625L28 32L26 32 z M 36 32L36 34.015625L38 34.015625L38 32L36 32 z M 40.019531 32L40.019531 34.015625L41.980469 34.015625L41.980469 32L40.019531 32 z M 22 35.984375L22 38L24 38L24 35.984375L22 35.984375 z M 26 35.984375L26 38L28 38L28 35.984375L26 35.984375 z M 36 35.984375L36 38L38 38L38 35.984375L36 35.984375 z M 40.019531 35.984375L40.019531 38L41.980469 38L41.980469 35.984375L40.019531 35.984375 z"></path></g></svg>
                    <span>{{ $heladeria->Nombre }}</span>
                </p>

                <p class="text-gray-600 text-lg flex items-center gap-2">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"></path> </g></svg>
                    <span>{{ $heladeria->Telefono ?? 'Sin teléfono disponible' }}</span>
                </p>

                @if($heladeria->Delivery)
                    <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold">
                        Delivery
                    </span>
                @endif
            </div>

            {{-- HORARIOS --}}
            @if($heladeria->horarios ?? false)
            <div class="space-y-2">
                <h2 class="text-2xl font-bold text-gray-700">Horarios</h2>
                <p class="text-gray-600 text-lg">
                    {{ $heladeria->Horarios }}
                </p>
            </div>
            @endif

            {{-- BOTÓN WHATSAPP --}}
            @php
                $telefono = preg_replace('/\D/', '', $heladeria->Telefono ?? '');
                $mensaje = urlencode("Hola, quiero consultar sobre la heladería *{$heladeria->Nombre}*");
            @endphp

            @if($telefono)
                <a href="https://wa.me/{{ $telefono }}?text={{ $mensaje }}"
                   target="_blank"
                   class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-xl shadow-lg transition">
                   Contactar por WhatsApp
                </a>
            @endif

        </div>
    </section>

    {{-- OTRAS HELADERÍAS --}}
    @if(isset($otras) && $otras->count() > 0)
    <section class="max-w-6xl mx-auto mt-20 px-5">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Otros locales</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            @foreach($otras as $local)
                <a href="{{ route('heladerias.show', $local->id) }}"
                   class="block rounded-xl shadow-lg overflow-hidden bg-white hover:shadow-2xl transition">

                    <img src="{{ $local->imagen ?? 'https://via.placeholder.com/400x300' }}"
                         class="w-full h-40 object-cover">

                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-700">{{ $local->nombre }}</h3>
                        <p class="text-gray-500 text-sm">{{ $local->localidad }}</p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>
    @endif

</main>

@endsection
