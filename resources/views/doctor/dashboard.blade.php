<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctor Dashboard') }}
        </h2>
    </x-slot>
    <livewire:statistic-component/>
    <livewire:recent-appointments/>
</x-app-layout>