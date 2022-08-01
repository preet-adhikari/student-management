<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>


{{--    Table--}}
    <livewire:users.index-users :users="$students" />

</x-app-layout>
