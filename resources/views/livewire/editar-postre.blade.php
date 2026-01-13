<div>
    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">

        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="EditarPostre" enctype='multipart/form-data'>
            @csrf

            <flux:input wire:model.live='nombre' name="nombre" label="Nombre del Postre" />

            <flux:input
                type="text"
                wire:model.live="categoria"
                name="categoria"
                label="Categoría"
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

            <flux:input accept="image/*" wire:model.live='imagen_nueva' type="file" label="Cambiar Foto del Postre" />

            <div class="flex gap-10 mt-4">
                {{-- Imagen Actual --}}
                <div class="flex flex-col">
                    <p class="text-sm text-gray-500 mb-2">Imagen actual:</p>
                    <img src="{{ asset('storage/postres/' . $imagen_url) }}" alt="Imagen actual" class="w-40 rounded-md">
                </div>

                {{-- Vista previa de la nueva imagen --}}
                @if ($imagen_nueva)
                    <div class="flex flex-col">
                        <p class="text-sm text-blue-500 mb-2">Nueva imagen (vista previa):</p>
                        <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Nueva imagen" class="w-40 rounded-md border-2 border-blue-400">
                    </div>
                @endif
            </div>

            <x-button type="submit" class="mt-5">Guardar Cambios</x-button>

        </form>
    </div>
</div>
