    <div class="flex flex-col md:flex-row justify-evenly items-center py-10">
        <a href="<?php echo e(route('sabores')); ?>">
            <div class="relative w-xs icebowl cursor-pointer">
                <div class="icebowl-bg"></div>
                <div class="icebowl-content flex flex-col items-center">
                <h3 class="title-bowl text-center text-white font-black mt-[40px]">
                    Sabores Sanfra
                </h3>
                <img class="mt-20" src="<?php echo e(asset('imagenes/bowl-1.png')); ?>" alt="Helado Sanfra">
                </div>
            </div>
            <h3 class="text-center font-bold mt-5">Sabores Sanfra</h3>
            <p class="text-brand-primary text-center">Clásicos Artesanales</p>
        </a>
        <a href="<?php echo e(route('postres')); ?>">
            <div class="relative w-xs icebowl cursor-pointer">
                <div class="icebowl-bg"></div>
                <div class="icebowl-content flex flex-col items-center">
                <h3 class="title-bowl text-center text-white font-black mt-[40px]">
                    Postres Helados
                </h3>
                <img class="mt-15" src="<?php echo e(asset('imagenes/bowl-3.png')); ?>" alt="Helado Sanfra">
                </div>
            </div>
            <h3 class="text-center font-bold mt-5">Postres Helados</h3>
            <p class="text-brand-primary text-center">Placer Frío</p>
        </a>
        <a href="<?php echo e(route('tortas')); ?>">
            <div class="relative w-xs icebowl cursor-pointer">
                <div class="icebowl-bg"></div>
                <div class="icebowl-content flex flex-col items-center">
                <h3 class="title-bowl text-center text-white font-black mt-[40px]">
                    Tortas Heladas
                </h3>
                <img class="mt-10" src="<?php echo e(asset('imagenes/bowl-2.png')); ?>" alt="Helado Sanfra">
                </div>
            </div>
            <h3 class="text-center font-bold mt-5">Tortas Heladas</h3>
            <p class="text-brand-primary text-center">Momentos Dulces</p>
        </a>
    </div>
<?php /**PATH D:\1-ProyectosWEB\Helados-Sanfra\resources\views/components/productos.blade.php ENDPATH**/ ?>