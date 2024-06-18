<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Doctor') }}
        </h2>
    </x-slot>
    <livewire:edit-doctor :doctor_id="$id"/>
</x-app-layout>