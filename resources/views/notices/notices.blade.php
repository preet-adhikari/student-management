<x-app-layout>
    {{--  Custom Styles  --}}
    <x-slot name="styles">
        <link rel="stylesheet" href="{{asset('css/customStyle.css')}}">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notices') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:notice />

        </div>

    </div>
    <script src="{{ asset('js/noticeAccordion.js') }}"></script>
</x-app-layout>


