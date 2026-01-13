<div>
    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">
        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="EditarHeladeria">
            @csrf
            <flux:input wire:model.live='Nombre' name="Nombre" label="Nombre"  />
            <flux:input wire:model.live='Telefono' name="Telefono" label="Telefono" />
            <flux:input wire:model.live='Horarios' name="Horarios" label="Horarios" />
            <flux:input wire:model.live='Direccion' name="Direccion" label="Direccion" />

            <flux:select wire:model.live="Delivery" name="Delivery" label="Delivery">
                <flux:select.option value="" disabled selected>Elija una opción</flux:select.option>
                <flux:select.option value="1">Disponible</flux:select.option>
                <flux:select.option value="0">No Disponible</flux:select.option>
            </flux:select>

            <flux:input accept="image/*" wire:model.live='Foto_nueva' type="file" label="Imagen del local" />

            @if ($Foto_nueva)
                <p>Vista previa de la imagen</p>
                <img src="{{ $Foto_nueva->temporaryUrl() }}" alt="Imagen temporal" class="w-64 rounded-md">
            @endif

            <x-button type="submit" class="mt-5">Guardar</x-button>

        </form>
    </div>
</div>
