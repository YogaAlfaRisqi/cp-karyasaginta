<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            <div class="flex items-center gap-2">
                <x-filament::icon
                    icon="heroicon-o-bolt"
                    class="h-5 w-5 text-gray-500 dark:text-gray-400"
                />
                <span>Quick Actions</span>
            </div>
        </x-slot>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
            @foreach($this->getActions() as $action)
                {{ $action }}
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
