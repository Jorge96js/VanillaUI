<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" style="
    overflow-x: hidden;
">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="vanillaUI es un theme enfocado en crear una presencia web para heladerias" />
        <meta name="keywords" content="helados, VanillaUI,theme, laravel theme, web theme,laravel," />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="VanillaUI - Theme Laravel" />
        <meta property="og:description" content="vanillaUI es un theme enfocado en crear una presencia web para heladerias" />>
        <meta property="og:type" content="website" />
        <title>VanillaUI - Laravel Theme</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <!--<link rel="apple-touch-icon" href="/apple-touch-icon.png">-->

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js']); ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->is('/')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/js/heladerias.js']); ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


    </head>
    <body class="bg-brand-secondary/15 relative font-primary">

        <div class="bg-brand-primary w-screen h-screen overflow-hidden z-99 fixed" id="loader">
            <span class="loader"></span>

        </div>

        <span class="after:absolute after:content-[''] after:z-10  fter:bg-white/20 after:backdrop-blur-lg after:border-b after:border-accent-foreground/10 after:w-full after:h-20"></span>

        <nav id="navbar" class="absolute flex md:flex-row justify-between items-center px-5  w-full top-0 left-0 z-10 h-20 <?php echo e(Route::is('home') ? 'bg-transparent' : 'bg-brand-primary'); ?>">

                <div class="logo ">
                    <a href="<?php echo e(route('home')); ?>" class="outline-none">
                        <?php if (isset($component)) { $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $attributes; } ?>
<?php $component = App\View\Components\Logo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Logo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $attributes = $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $component = $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
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

                <ul class=" shadow-md md:shadow-none md:flex items-center gap-5 px-10" id="menu">
                    <li class="md:hidden">
                        <div class="logo ">
                            <a href="/">
                                <?php if (isset($component)) { $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $attributes; } ?>
<?php $component = App\View\Components\Logo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Logo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $attributes = $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $component = $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
                            </a>
                        </div>
                    </li>
                    <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5 <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                        <a class="text-xl text-white font-bold text-shadow-md/30" href="<?php echo e(route('home')); ?>">Inicio</a>
                    </li>

                    <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-xl text-white font-bold text-shadow-md/30" href="<?php echo e(route('productos')); ?>">Productos</a>
                    </li>

                    <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5 <?php echo e(request()->routeIs('heladerias') ? 'active' : ''); ?>">
                        <a class="text-xl text-white font-bold text-shadow-md/30" href="<?php echo e(route('heladerias')); ?>">Heladerias</a>
                    </li>

                    <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-xl text-white font-bold text-shadow-md/30" href="<?php echo e(route('home')); ?>/#franquicia">Franquicia</a>
                    </li>

                    <li class="nav__item overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                        <a class="text-xl text-white font-bold text-shadow-md/30" href="<?php echo e(route('home')); ?>/#contacto">Contacto</a>
                    </li>
                </ul>
            </nav>

            <?php echo $__env->yieldContent('contenido'); ?>

            <footer class="bg-brand-primary w-full flex flex-col">
                <div class="flex justify-center items-center mt-10 mb-5">
                    <?php if (isset($component)) { $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $attributes; } ?>
<?php $component = App\View\Components\Logo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Logo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $attributes = $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $component = $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
                </div>
                <ul class="flex flex-col md:flex-row justify-center items-center gap-5 mx-auto">

                        <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                            <a class="text-md text-white font-light" href="<?php echo e(route('home')); ?>">Inicio</a>
                        </li>

                        <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                            <a class="text-md text-white font-light" href="<?php echo e(route('productos')); ?>">Productos</a>
                        </li>

                        <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                            <a class="text-md text-white font-light" href="<?php echo e(route('heladerias')); ?>">Heladerias</a>
                        </li>

                        <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                            <a class="text-md text-white font-light" href="<?php echo e(route('home')); ?>/#franquicia">Franquicia</a>
                        </li>

                        <li class="overflow-hidden text-left inline-block relative py-1 md:m-0 my-5">
                            <a class="text-md text-white font-light" href="<?php echo e(route('home')); ?>/#contacto">Contacto</a>
                        </li>
                    </ul>

                    <ul class="flex gap-3 mx-auto mt-5">
                        <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                            <a href="#">
                                <img class="w-5 invert" src="<?php echo e(asset('facebook.svg')); ?>" alt="facebook">
                            </a>
                        </li>
                        <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                            <a href="#">
                                <img class="w-5 invert" src="<?php echo e(asset('instagram.svg')); ?>" alt="instagram">
                            </a>
                        </li>
                        <li class="p-1 w-10 h-10 flex items-center justify-center cursor-pointer rounded-full bg-brand-primary">
                            <a href="#">
                                <img class="w-5 invert" src="<?php echo e(asset('tiktok.svg')); ?>" alt="tiktok">
                            </a>
                        </li>
                    </ul>
                    <div class="w-full p-1 relative bg-brand-primary text-center">
                        <div class="absolute inset-0 bg-brand-primary brightness-50"></div>
                        <p class="relative text-white mt-5 text-xs md:text-base">
                            © <?php echo e(date('Y')); ?> Heladeria. Todos los derechos reservados.
                        </p>
                        <p class="relative text-white text-xs md:text-xs font-secondary" id="developed">
                            Desarrollado por <a href="https://binaraweb.com.ar"><strong>Binaraweb</strong></a>
                        </p>
                    </div>

            </footer>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    </body>
</html>
<?php /**PATH D:\1-ProyectosWEB\VanillaUI\resources\views/layouts/app.blade.php ENDPATH**/ ?>