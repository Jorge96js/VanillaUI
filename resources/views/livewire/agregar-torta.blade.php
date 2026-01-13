<div>

    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">

        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="AgregarTorta" enctype='multipart/form-data'>
            @csrf
            <flux:input wire:model.live='nombre' name="nombre" label="Nombre" />

            <flux:input
                type="text"
                wire:model.live="categoria"
                name="categoria"
                label="Categoria"
                value="tortas"
            />
            <flux:input accept="image/*" wire:model.live='imagen' type="file" label="Foto de la torta" />

            @if ($imagen)
                <p>Vista previa de la imagen</p>
                <img src="{{ $imagen->temporaryUrl() }}" alt="Imagen temporal" class="w-64 rounded-md">
            @endif

            <x-button type="submit" class="mt-5">Guardar</x-button>

        </form>
    </div>
</div>

