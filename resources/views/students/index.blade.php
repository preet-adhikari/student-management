<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Students') }}
            </h2>
        </div>
        <div class="px-3 bg-gray-900 capitalize rounded shadow-xl">
            <button onclick="Livewire.emit('openModal' , 'users.add-user')" class="text-white text-xl">
                {{ __('Add a student') }}
            </button>
        </div>
    </x-slot>


{{--    Table--}}
    <livewire:users.index-users :users="$students" />

</x-app-layout>
