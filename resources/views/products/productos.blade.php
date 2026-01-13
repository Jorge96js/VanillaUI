@extends('layouts.app')

@section('contenido')

    <main class="py-20">
        <section class="mb-10">
            <h1 class="text-center text-3xl md:text-5xl font-bold mt-20 mb-5 text-slate-800">
            Nuestros Productos <span class="text-brand-primary TEXT-">VanillaUI</span>
            </h1>
            <h2 class="w-xl text-center mx-auto text-slate-800">
                Helados Artesanales, Postres Helados y Tortas VanillaUI. Elaborados con ingredientes frescos de la más alta calidad para crear momentos inolvidables.
            </h2>
        </section>

        <!--Componente Productos-->
        <x-productos />
    </main>


@endsection
