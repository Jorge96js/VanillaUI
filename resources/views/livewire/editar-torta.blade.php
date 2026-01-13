<div>

    <div class="bg-gray-200 border-gray-400 dark:border-neutral-700 border rounded p-5 my-10 dark:bg-neutral-900">

        <form action="" method="POST" class="flex flex-col gap-5" wire:submit.prevent="EditarTorta" enctype='multipart/form-data'>
            @csrf
            <flux:input wire:model.live='nombre' name="nombre" label="Nombre" />

            <flux:input wire:model.live="categoria" name="categoria" value="tortas" label="Categoria" disabled( $disabled:mixed, $current:mixed, $echo:boolean ) />


            <x-button type="submit" class="mt-5">Guardar</x-button>

        </form>
    </div>
</div>

