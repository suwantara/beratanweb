<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0 text-gray-800">
            Messages
        </h2>
    </x-slot>

    <x-dashboard.message :messages="$messages" />
</x-app-layout>
