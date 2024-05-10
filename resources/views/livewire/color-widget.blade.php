<x-filament-widgets::widget>
    <x-filament::section>
        <form wire:submit="submit">
            {{ $this->form }}

            <x-filament::button type="submit" color="primary" class="mt-6">Submit</x-filament::button>
        </form>
    </x-filament::section>
</x-filament-widgets::widget>
