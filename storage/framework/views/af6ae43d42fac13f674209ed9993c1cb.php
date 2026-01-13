<?php $__env->startSection('contenido'); ?>

<header class="h-[50rem] bg-brand-primary">
    <div class="swiper-header h-full">

            <div class="px-20 md:p-20 h-full bg-cover relative bg-center" style="background-image: url('<?php echo e(asset('imagenes/header-background.webp')); ?>')">
                <div class="relative z-3 h-full flex flex-col items-start justify-center ">
                    <h1 class="text-white text-5xl md:text-7xl font-extrabold leading-tight drop-shadow-xl">
                        Helados Artesanales<br>
                        <span class="text-brand-primary">VanillaUI</span>
                    </h1>

                    <p class="text-white text-xl md:text-2xl mt-6 max-w-2xl drop-shadow">
                        Sabores auténticos preparados con ingredientes naturales y recetas tradicionales.
                    </p>
                <div class="mt-8">
                    <a
                        href="<?php echo e(route('heladerias')); ?>"
                        class="bg-brand-primary hover:bg-[#d95516] text-white px-8 py-4 rounded-xl text-lg font-semibold shadow-lg transition">
                        Buscar sucursal
                    </a>
                </div>
                </div>
                <div class="after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-t after:from-[#000000a1] after:to-transparent"></div>
            </div>

    </div>
</header>
<main>

    <section class="mt-5 pt-20" id="productos">
        <h3 class="text-center text-2xl font-bold mb-3 text-slate-800">
            Refrescante y dulce
        </h3>
        <h2 class="text-center text-4xl font-bold mb-3 text-slate-800">
            Refrescate con <span class="text-brand-primary">cada cucharada</span>
        </h2>
        <p class="text-center text-xs w-xs lx:w-md mx-auto text-gray-400">
            Cada visita a VanillaUI es una pausa deliciosa en tu día. Cremoso, suave y lleno de sabor.
        </p>

        <!--Componente Productos-->
        <?php if (isset($component)) { $__componentOriginal7b62dc2182b09ce729e58db440961cec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b62dc2182b09ce729e58db440961cec = $attributes; } ?>
<?php $component = App\View\Components\Productos::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('productos'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Productos::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b62dc2182b09ce729e58db440961cec)): ?>
<?php $attributes = $__attributesOriginal7b62dc2182b09ce729e58db440961cec; ?>
<?php unset($__attributesOriginal7b62dc2182b09ce729e58db440961cec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b62dc2182b09ce729e58db440961cec)): ?>
<?php $component = $__componentOriginal7b62dc2182b09ce729e58db440961cec; ?>
<?php unset($__componentOriginal7b62dc2182b09ce729e58db440961cec); ?>
<?php endif; ?>



    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 max-h-[70rem] h-[30rem] my-20 shadow-md">
        <div class="bg-cover bg-center md:h-full h-72" style="background-image: url('<?php echo e(asset('imagenes/header-background-2.webp')); ?>')"></div>
        <div class="px-20 py-10 flex flex-col justify-center bg-brand-primary">
            <h3 class="text-md text-white" data-aos="fade-in" data-aos-delay="30">Satisface tu gusto por lo dulce</h3>
            <h2 class="text-shadow-2xs text-2xl md:text-4xl font-bold text-white mb-5" data-aos="fade-in" data-aos-delay="40" >El sabor que te hace <span class="text-brand-secondary">sonreír</span></h2>
            <p class="text-sm md:text-md text-white" data-aos="fade-up" data-aos-delay="30">Disfrutá helados cremosos, frescos y llenos de carácter. Una mezcla perfecta de sabor y calidad para darte ese gustito que te merecés.</p>
        </div>
    </section>
    <!-- Seccion sucursales--->
    <section class="p-10 mt-70 hidden sm:block sm:mt-30 md:mt-10 lg:mt-0">
        <h2 class="text-4xl text-center mb-5 text-slate-800 font-bold ">Elegí tu heladería más cercana</h2>
        <p class="text-center mb-10 text-slate-800">Descubrí tu sucursal VanillaUI más cercana y disfrutá nuestros helados artesanales con la misma calidad de siempre.</p>
        <div class="overflow-hidden">
            <div class="swiper swiper-sucursales rounded-xl">

                <div id="wrapperHeladerias" class="swiper-wrapper py-5">

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $heladerias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heladeria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="slide-sucursal p-10 swiper-slide bg-brand-primary">
                <div class="flex w-full md:w-xl" data-aos="fade-in" data-aos-delay="50">
                        <div class="w-full md:w-xl">
                            <h3 class="text-white text-4xl font-bold mb-10"> <?php echo e($heladeria->Nombre); ?> </h3>
                            <ul class="flex flex-col p-0 w-full md:w-xl ">
                                <li class="shadow-md shadow-b mt-1 bg-brand-secondary font-bold text-neutral-800 odd:text-white odd:bg-brand-primary px-5 py-2">Direccion: <?php echo e($heladeria->Direccion); ?> </li>
                                <li class="shadow-md shadow-b mt-1 bg-brand-secondary font-bold text-neutral-800 odd:text-white odd:bg-brand-primary px-5 py-2">Telefono: <?php echo e($heladeria->Telefono); ?> </li>
                                <li class="shadow-md shadow-b mt-1 bg-brand-secondary font-bold text-neutral-800 odd:text-white odd:bg-brand-primary px-5 py-2">Horarios: <?php echo e($heladeria->Horarios); ?> </li>
                                <li class="shadow-md shadow-b mt-1 bg-brand-secondary font-bold text-neutral-800 odd:text-white odd:bg-brand-primary px-5 py-2">Delivery: <?php echo e($heladeria->Delivery ? 'Disponible' : 'No disponible'); ?> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide-image shadow-md rounded-xl overflow-hidden">
                    <img
                        class="w-full aspect-[4/3] object-cover object-center"
                        src="<?php echo e(asset('storage/heladerias/' . $heladeria->Foto)); ?>"
                        alt="Sucursal ${Localidad}">
                    </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <a href="<?php echo e(route('heladerias')); ?>" class="float-right bg-brand-primary hover:bg-[#e76322] uppercase text-white text-center font-bold mx-auto px-5 py-2 rounded-md">Ver Todas</a>
    </section>

    <a href="<?php echo e(route('heladerias')); ?>"
    class="mt-60 rounded-sm shadow-xl sm:hidden bg-brand-primary hover:bg-[#e76322] uppercase text-white flex justify-center items-center text-center font-bold mx-auto w-80 h-20 ">
        <p class="text-shadow-md text-sm">Busca tu heladeria mas cercana</p>
    </a>

    <!--Franquicia-->
    <section class="py-10 px-5 mt-15 sm:mt-0" id="franquicia">
        <h2 class="text-center text-3xl md:text-[3.4rem] mb-5 text-slate-800 font-bold"><?php echo e(config('landing.titulo')); ?></h2>
        <p class="text-center mb-10 text-slate-800 text-xs md:text-xl w-8/12 md:w-8/12 mx-auto">
            <?php echo e(config('landing.descripcion')); ?>

        </p>

        <div class="flex flex-wrap justify-center gap-20">
            <div class="w-50 h-50 flex items-center flex-col p-5 shadow-xl rounded-xl" data-aos="fade-up" data-aos-delay="400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-brand-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>

                <p class="font-semibold mt-5 text-center"><?php echo e(config('landing.card_1')); ?></p>
            </div>

            <div class="w-50 h-50 flex items-center flex-col p-5 shadow-xl rounded-xl" data-aos="fade-up" data-aos-delay="500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-brand-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
                <p class="font-semibold mt-5 text-center"><?php echo e(config('landing.card_2')); ?></p>
            </div>

            <div class="w-50 h-50 flex items-center flex-col p-5 shadow-xl rounded-xl" data-aos="fade-up" data-aos-delay="600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-brand-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                </svg>

                <p class="font-semibold mt-5 text-center"><?php echo e(config('landing.card_3')); ?></p>
            </div>
        </div>

        <div class="mt-20 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-5">
            <div class="bg-gray-50 p-8 border-l-4 border-brand-primary shadow-sm" data-aos="fade-right">
                <h3 class="text-brand-primary font-bold text-xl mb-3 flex items-center">
                    <span class="mr-2">💳</span> <?php echo e(config('landing.inv_titulo')); ?>

                </h3>
                <p class="text-slate-700">
                    <?php echo e(config('landing.inv_desc')); ?>

                </p>
            </div>

            <div class="bg-slate-50 p-8 border-l-4 border-brand-primary shadow-sm" data-aos="fade-left">
                    <h3 class="text-slate-800 font-bold text-xl mb-3 flex items-center">
                        <span class="mr-2">🚚</span> <?php echo e(config('landing.log_titulo')); ?>

                    </h3>
                    <p class="text-slate-700"><?php echo e(config('landing.log_desc')); ?></p>
            </div>

        </div>

        <div class="mt-20 text-center">
            <h3 class="text-2xl font-bold text-slate-800 mb-8 italic">¿Cómo empezar? Es muy simple:</h3>
            <div class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-20">
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="bg-slate-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mb-3">1</div>
                    <p class="text-sm font-medium">Contactanos vía WhatsApp</p>
                </div>

                <div class="hidden md:block text-slate-800 font-bold">➔</div>
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="bg-slate-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mb-3">2</div>
                    <p class="text-sm font-medium">Recibí el asesoramiento inicial</p>
                </div>

                <div class="hidden md:block text-slate-800 font-bold">➔</div>
                <div class="flex flex-col items-center max-w-[200px]">
                    <div class="bg-slate-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mb-3">3</div>
                    <p class="text-sm font-medium">Activá tu zona y empezá a ganar</p>
                </div>
            </div>
        </div>


    </section>
    <!--Contacto-->
    <section class="relative w-aut xl:w-7xl md:mb-30 h-92 bg-brand-primary flex justify-center flex-col gap-5 mx-0 md:mx-8 xl:mx-auto mt-20 md:rounded-3xl md:shadow-2xl overflow-hidden" id="contacto">
        <h2 class="relative z-10 text-3xl md:text-4xl font-bold text-shadow-2xs text-slate-100 text-center">Ponte en contacto</h2>
        <h3 class="relative z-10 text-xl md:text-md w-sm md:w-xl mx-auto text-center font-bold text-shadow-2xs text-slate-100">¿Tenés una pregunta sobre nuestros sabores, pedidos o franquicias? Escribinos y te respondemos pronto.</h3>
        <a href="#" class="relative z-2 text-center text-white font-bold mx-auto rounded-2xl bg-green-500 hover:bg-green-400 transition-all px-10 py-5 hover:transition hover:scale-95">Contactar por WhatsApp</a>
        <div class="contacto-bg"></div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\sanfrahelados.com.ar\resources\views/welcome.blade.php ENDPATH**/ ?>