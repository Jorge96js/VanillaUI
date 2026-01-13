<x-layouts.app :title="__('Heladeria | ' . $title )">

    <h1 class="text-3xl font-bold text-neutral-800 dark:text-white">{{ $title }}</h1>

    <livewire:EditarHeladeria :heladeria="$heladeria" />

</x-layouts.app>
