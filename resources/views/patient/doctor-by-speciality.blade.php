<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Speciality - {{ $speciality->speciality_name }}
        </h2>
    </x-slot>
  <div class="py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:featured-doctors :speciality_id="$id"/>
            </div>
        </div>
    </div>
</x-app-layout>
