<?php $__env->startSection('contenido'); ?>
    <main class="p-5 md:p-15">
        <h1 class="text-center text-4xl my-20 font-bold font-primary text-slate-800">Postres Helados <span class="font-black text-brand-primary">VanillaUi</span></h1>

        <h2 class="text-left">Todos Los Postres</h2>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-5 gap-6">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $postres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="relative h-52 overflow-hidden">
                        <a href="<?php echo e(asset('storage/postres/' . $postre->imagen_url)); ?>" data-lightbox="postre">
                            <img class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                                src="<?php echo e(asset('storage/postres/' . $postre->imagen_url)); ?>"
                                alt="<?php echo e($postre->nombre); ?>">
                        </a>

                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm uppercase tracking-wider">
                                <?php echo e($postre->categoria ?? 'Tradicional'); ?>

                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 transition-colors">
                            <?php echo e($postre->nombre); ?>

                        </h3>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($postre->descripcion): ?>
                            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">
                                <?php echo e($postre->descripcion); ?>

                            </p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($postre->precio): ?>

                        <p class="font-secondary text-gray-500 font-bold text-md leading-relaxed line-clamp-3 mb-4">
                            $ <span class="text-brand-primary font-black"><?php echo e($postre->precio); ?></span>
                        </p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-full py-10">
                    <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        </section>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\VanillaUI\resources\views/products/postres.blade.php ENDPATH**/ ?>