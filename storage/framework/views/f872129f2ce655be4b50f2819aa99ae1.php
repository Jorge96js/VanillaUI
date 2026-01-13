<?php $__env->startSection('contenido'); ?>
    <main class="p-5 md:p-15">
        <h1 class="text-center text-4xl mt-28 font-bold font-primary text-slate-800">Tortas Heladas <span class="font-black text-brand-primary">VanillaUi</span></h1>


        <div class="grid gird-cols-1 md:grid-cols-1 p-5 gap-5 mt-20">

            <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                Tortas
                <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-orange-900"></div>
            </h3>

            <h2 class="text-left italic text-gray-500">Todos los sabores de la temporada</h2>

                <ul class="max-h-max grid place-items-center gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center" data-categoria="tortas">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $tortas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="group w-full max-w-sm bg-white border border-gray-100 rounded-2xl shadow-lg font-primary text-slate-900 overflow-hidden cursor-pointer
                                transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">

                            <a data-lightbox="tortas-<?php echo e($item->nombre); ?>" href="<?php echo e($item->imagen); ?>" class="h-52 w-full overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
                                    src="<?php echo e($item->imagen); ?>"
                                    alt="Torta helada <?php echo e($item->nombre); ?>">
                            </a>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i < 6; $i++): ?>
                                <a
                                data-lightbox="tortas-<?php echo e($item->nombre); ?>"
                                href="http://sanfrahelados.com.ar/imagenes/tortas/<?php echo e($item->nombre . '-' . $i); ?>.jpg"></a>
                                <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <div class="p-4 sm:p-5 text-center">
                                <h3 class="font-extrabold text-2xl text-slate-800 mb-1 leading-tight"><?php echo e($item->nombre); ?></h3>
                            </div>
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-full py-10">
                            <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\VanillaUI\resources\views/products/tortas.blade.php ENDPATH**/ ?>