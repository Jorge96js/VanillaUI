<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Descubrí los mejores helados artesanales en Sanfra Vedia. La franquicia Sanfra ofrece sabores únicos y auténticos, elaborados con calidad y tradición. Helados Sanfra: tu lugar ideal para disfrutar en familia y amigos." />
        <meta name="keywords" content="helados, Sanfra, Sanfra Vedia, franquicia, helados artesanales" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="Helados Sanfra Vedia - Helados artesanales Sanfra" />
        <meta property="og:description" content="Disfrutá los mejores helados artesanales en Sanfra Vedia. La franquicia Sanfra te acerca calidad y tradición." />
        <meta property="og:image" content="https://heladossanfra.com.ar/imagenes/graph.png" />
        <meta property="og:url" content="https://heladossanfra.com.ar" />
        <meta property="og:type" content="website" />
        <title>Helados Sanfra Vedia</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js']); ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->is('/')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/js/heladerias.js']); ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


    </head>
<body class="bg-[#f6f6f6] relative font-primary">

    <div class="bg-brand-primary w-screen h-screen overflow-hidden z-99 fixed" id="loader">
        <img src="<?php echo e(asset('imagenes/logo-sanfra.png')); ?>" alt="loading logo">
    </div>

    <nav id="navbar" class="absolute flex md:flex-row justify-between items-center bg-brand-primary px-5  w-full top-0 left-0 z-10 h-[5rem] ">

            <div class="logo ">
                <a href="<?php echo e(route('home')); ?>" class="outline-none">
                    <img class="w-[10rem]" src="<?php echo e(asset('imagenes/logo-sanfra.png')); ?>" alt="Logo heladeria sanfra" >
                </a>
            </div>

            <button class="md:hidden z-50 cursor-pointer" id="hamburgerButton">

                <svg id="hamburgerButton" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </button>

            <!--Close button-->
            <button class="hidden z-50 cursor-pointer" id="closeIcon">
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>

            <ul class=" shadow-md md:shadow-none md:flex items-center gap-5" id="menu">
                <li class="md:hidden">
                    <div class="logo ">
                        <a href="/">
                        <img class="w-[10rem]" src="<?php echo e(asset('imagenes/logo-sanfra.png')); ?>" alt="Logo heladeria sanfra" >
                        </a>
                    </div>
                </li>
                <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5 <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                    <a class="text-xl text-white font-semibold" href="<?php echo e(route('home')); ?>">Inicio</a>
                </li>

                <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                    <a class="text-xl text-white font-semibold" href="<?php echo e(route('productos')); ?>">Productos</a>
                </li>

                <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5 <?php echo e(request()->routeIs('heladerias') ? 'active' : ''); ?>">
                    <a class="text-xl text-white font-semibold" href="<?php echo e(route('heladerias')); ?>">Heladerias</a>
                </li>

                <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                    <a class="text-xl text-white font-semibold" href="<?php echo e(route('home')); ?>/#franquicia">Franquicia</a>
                </li>

                <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                    <a class="text-xl text-white font-semibold" href="<?php echo e(route('home')); ?>/#contacto">Contacto</a>
                </li>
            </ul>
        </nav>

        <?php echo $__env->yieldContent('contenido'); ?>

        <footer class="bg-brand-secondary w-full flex flex-col">
                <img class="w-[10rem] mx-auto" src="<?php echo e(asset('imagenes/logo-sanfra.png')); ?>" alt="Logo footer">
                <ul class="flex flex-col md:flex-row justify-center items-center gap-5 mx-auto">

                    <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-md text-white font-semibold" href="<?php echo e(route('home')); ?>">Inicio</a>
                    </li>

                    <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-md text-white font-semibold" href="<?php echo e(route('productos')); ?>">Productos</a>
                    </li>

                    <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-md text-white font-semibold" href="<?php echo e(route('heladerias')); ?>">Heladerias</a>
                    </li>

                    <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-md text-white font-semibold" href="<?php echo e(route('home')); ?>/#franquicia">Franquicia</a>
                    </li>

                    <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-md text-white font-semibold" href="<?php echo e(route('home')); ?>/#contacto">Contacto</a>
                    </li>
                </ul>

                <ul class="flex gap-3 mx-auto mt-5">
                    <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                        <a href="https://www.facebook.com/profile.php?id=61577057333582">
                            <img class="w-5 invert" src="<?php echo e(asset('facebook.svg')); ?>" alt="facebook">
                        </a>
                    </li>
                    <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                        <a href="https://www.instagram.com/heladossanfra/">
                            <img class="w-5 invert" src="<?php echo e(asset('instagram.svg')); ?>" alt="instagram">
                        </a>
                    </li>
                    <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                        <a href="https://www.tiktok.com/@helados.sanfra">
                            <img class="w-5 invert" src="<?php echo e(asset('tiktok.svg')); ?>" alt="tiktok">
                        </a>
                    </li>
                </ul>
                <p class="w-full p-1 bg-[#44291a] text-center text-white mt-5 text-xs md:text-base">© <?php echo e(date('Y')); ?> Helados Sanfra. Todos los derechos reservados.</p>
        </footer>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    </body>
</html>
<?php /**PATH /home/utvrmfia/sanfrahelados.com.ar/resources/views/layouts/app.blade.php ENDPATH**/ ?>