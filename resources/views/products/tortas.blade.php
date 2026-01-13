@extends('layouts.app')

@section('contenido')
    <main class="p-5 md:p-15">
        <h1 class="text-center text-4xl mt-28 font-bold font-primary text-slate-800">Tortas Heladas <span class="font-black text-brand-primary">VanillaUi</span></h1>


        <div class="grid gird-cols-1 md:grid-cols-1 p-5 gap-5 mt-20">

            <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                Tortas
                <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-orange-900"></div>
            </h3>

            <h2 class="text-left italic text-gray-500">Todos los sabores de la temporada</h2>

                <ul class="max-h-max grid place-items-center gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center" data-categoria="tortas">

                    @forelse ($tortas as $item )
                        <li class="group w-full max-w-sm bg-white border border-gray-100 rounded-2xl shadow-lg font-primary text-slate-900 overflow-hidden cursor-pointer
                                transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">

                            <a data-lightbox="tortas-{{ $item->nombre }}" href="{{ $item->imagen }}" class="h-52 w-full overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
                                    src="{{ $item->imagen }}"
                                    alt="Torta helada {{ $item->nombre }}">
                            </a>

                                @for ($i = 1; $i < 6; $i++)
                                <a
                                data-lightbox="tortas-{{ $item->nombre }}"
                                href="http://sanfrahelados.com.ar/imagenes/tortas/{{ $item->nombre . '-' . $i}}.jpg"></a>
                                @endfor

                            <div class="p-4 sm:p-5 text-center">
                                <h3 class="font-extrabold text-2xl text-slate-800 mb-1 leading-tight">{{ $item->nombre }}</h3>
                            </div>
                        </li>

                    @empty
                        <div class="col-span-full py-10">
                            <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                        </div>
                    @endforelse
                </ul>


    </main>
@endsection
