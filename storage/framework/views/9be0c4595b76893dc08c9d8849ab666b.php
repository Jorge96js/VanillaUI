<?php $__env->startSection('contenido'); ?>

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
    </main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\1-ProyectosWEB\VanillaUI\resources\views/products/productos.blade.php ENDPATH**/ ?>