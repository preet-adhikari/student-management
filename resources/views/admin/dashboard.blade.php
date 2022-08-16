<x-admin-layout>

    {{--  Content  --}}
    <x-slot name="content">
        Hello , {{auth()->user()->name}}. How are you today?
    </x-slot>

</x-admin-layout>
