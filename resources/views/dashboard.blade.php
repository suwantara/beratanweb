<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    @if(isset($messages))
        <x-dashboard.message :messages="$messages" />
    @endif
</x-app-layout>
