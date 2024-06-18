<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reschedule Appointment') }}
        </h2>
    </x-slot>
    <livewire:reschedule-form :appointment_id="$appointment_id"/>
</x-app-layout>