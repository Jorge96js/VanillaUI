<div>

    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">

        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="EditarSabor" enctype='multipart/form-data'>
            @csrf
            <flux:input wire:model.live='nombre' name="nombre" label="Nombre" />

            <flux:select wire:model.live="categoria" name="categoria" label="Categoria">
                <flux:select.option value="" disabled selected>Elija una opción</flux:select.option>
                <flux:select.option value="Chocolates">Chocolates</flux:select.option>
                <flux:select.option value="Cremas">Cremas</flux:select.option>
                <flux:select.option value="Especiales">Especiales</flux:select.option>
                <flux:select.option value="Dulce de leche">Dulce de leche</flux:select.option>
                <flux:select.option value="Frutas naturales">Frutas naturales</flux:select.option>
                <flux:select.option value="Frutas naturales">Frutas a la crema</flux:select.option>
                <flux:select.option value="Mousses">Mousses</flux:select.option>
            </flux:select>


            <x-button type="submit" class="mt-5">Guardar</x-button>

        </form>
    </div>
</div>

