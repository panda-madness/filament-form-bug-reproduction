<div class="min-h-screen grid items-center justify-center">
    <form wire:submit="handle" class="flex flex-col gap-8">
        <div>{{ $this->form }}</div>

        <x-filament::button type="submit">Submit form</x-filament::button>
    </form>
</div>
