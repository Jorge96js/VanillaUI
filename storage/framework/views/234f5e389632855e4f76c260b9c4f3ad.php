<?php $__env->startSection('contenido'); ?>
    <main class="p-5 md:p-15">
        <h1 class="text-center text-4xl my-20 font-bold font-primary text-slate-800">Gustos <span class="font-bold text-brand-primary">VanillaUI</span></h1>
        <div class="flex w-full gap-3 my-5 flex-wrap">
            <button data-filter="todo" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Todo</button>
            <button data-filter="chocolates" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Chocolate</button>
            <button data-filter="cremas" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Cremas</button>
            <button data-filter="especiales" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Especiales</button>
            <button data-filter="dulceDeleche" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Dulce de leche</button>
            <button data-filter="frutasNaturales" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Frutas naturales</button>
            <button data-filter="frutasCrema" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Frutas a la crema</button>
            <button data-filter="mousses" class="rounded-full px-3 py-1 font-primary cursor-pointer bg-gray-100 border-2">Mousses</button>
        </div>

        <h2 class="text-left italic text-gray-500">Todos los sabores de la temporada</h2>

            <div class="grid gird-cols-1 md:grid-cols-3 p-5 gap-5">

                <ul class="max-h-max flex flex-col gap-2" data-categoria="chocolates">
                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Chocolates
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-orange-900"></div>
                    </h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $chocolates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

                <ul class="max-h-max flex flex-col gap-2" data-categoria="cremas">

                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Cremas
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-orange-300"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $cremas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

                <ul class="max-h-max flex flex-col gap-2" data-categoria="especiales">
                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Especiales
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-sky-500"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $especiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

                <ul class="max-h-max flex flex-col gap-2" data-categoria="dulceDeleche">

                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Dulce de leche
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-orange-700"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $dulceDeleche; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

                <ul class="max-h-max flex flex-col gap-2" data-categoria="frutasNaturales">

                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Frutas naturales
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-pink-600"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $frutasNaturales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

                <ul class="max-h-max flex flex-col gap-2" data-categoria="frutasCrema">

                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Frutas a la crema
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-pink-300"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $frutasCrema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">

                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>


                <ul class="max-h-max flex flex-col gap-2" data-categoria="mousses">

                    <h3 class="text-slate-900 text-xl font-bold uppercase mb-5 text-center relative bg-gray-300/10 shadow py-1">
                        Mousses
                        <div class="after:left-0 after:top-0 after:absolute after:content-[''] after:rounded after:w-1 after:h-full after:bg-amber-300"></div>
                    </h3>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $mousses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="w-full bg-gray-200/55 shadow-md rounded-xl font-primary p-3 text-slate-900 cursor-pointer hover:transform hover:-translate-y-0.5 transiton-all ">
                            <?php echo e($item->nombre); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center text-gray-400 font-secondary"> Hubo un problema al cargar el contenido </p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>

            </div>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\VanillaUI\resources\views/products/sabores.blade.php ENDPATH**/ ?>