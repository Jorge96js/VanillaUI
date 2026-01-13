<?php $__env->startSection('contenido'); ?>

    <main class="py-30">

        <h1 class="text-center text-black text-3xl font-bold mb-3">
            Heladerías VanillaUI – Sucursales y Horarios Actualizados
        </h1>

        <h2 class="text-center text-gray-600 text-lg mb-8">
            Encontrá tu local VanillaUI más cercano, consultá horarios, teléfonos y opciones de delivery.
        </h2>

        <section class="grid md:grid-cols-1 xl:grid-cols-2 gap-5 px-5 mt-10 mx-auto md:w-[85%] ">
                <!--Loop heladerias-->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $heladerias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heladeria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col items-center gap-4 cursor-pointer bg-white shadow-md p-4 rounded-xl hover:-translate-y-1 transition">

                        
                        <div class="w-full h-56 rounded-lg overflow-hidden flex-shrink-0">
                            <img class="hover:scale-105 transition-all object-center" src="<?php echo e(asset('storage/heladerias/' . $heladeria->Foto)); ?>"
                                class="w-full h-full object-cover"
                                alt="Foto de <?php echo e($heladeria->Nombre); ?>">
                        </div>

                        
                        <div class="flex flex-col w-full">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-lg text-neutral-800">
                                    <?php echo e($heladeria->Nombre); ?>

                                </h3>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($heladeria->Delivery): ?>
                                    <span class="bg-orange-100 text-brand-primary px-3 py-1 rounded-full text-xs font-semibold">
                                        Delivery
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <p class="text-gray-600 text-sm mt-1">
                                📞 <?php echo e($heladeria->Telefono); ?>

                            </p>

                            <p class="text-gray-600 text-sm">
                                🕒 <?php echo e($heladeria->Horarios); ?>

                            </p>

                            <div class="mt-3 flex gap-2">
                                <a href="tel:<?php echo e($heladeria->Telefono); ?>"
                                class="flex items-center bg-brand-primary text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-md">
                                    Llamar
                                </a>

                                <a href="<?php echo e(route('heladerias.show', ['id' => $heladeria->id])); ?>"
                                target="_blank"
                                class="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 hover:text-neutral-800 bg-gray-100 hover:bg-gray-200 shadow-md">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </section>


    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\sanfrahelados.com.ar\resources\views/heladerias/heladerias.blade.php ENDPATH**/ ?>