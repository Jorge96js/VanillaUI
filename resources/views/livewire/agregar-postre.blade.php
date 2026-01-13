<div>
    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">

        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="AgregarPostre" enctype='multipart/form-data'>
            @csrf

            <flux:input wire:model.live='nombre' name="nombre" label="Nombre del Postre" />

            <flux:input
                type="text"
                wire:model.live="categoria"
                name="categoria"
                label="Categoría"
                value="postres"
            />
            <flux:textarea
                type="text"
                wire:model.live="descripcion"
                name="descripcion"
                label="Descripcion del producto (Opcional)"
                value="descripcion"
            />
            <flux:input
                type="number"
                wire:model.live="precio"
                name="precio"
                label="Precio (Opcional)"
            />
            <flux:input accept="image/*" wire:model.live='imagen_url' type="file" label="Foto del Postre" />

            @if ($imagen_url)
                <div class="mt-4">
                    <p class="text-sm text-gray-500 dark:text-neutral-400 mb-2">Vista previa de la imagen:</p>
                    <img src="{{ $imagen_url->temporaryUrl() }}" alt="Imagen temporal" class="w-64 rounded-md shadow-sm">
                </div>
            @endif

            <x-button type="submit" class="mt-5">Guardar Postre</x-button>

        </form>
    </div>
</div>
