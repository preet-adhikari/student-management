<x-app-layout>

    {{--  Custom Styles  --}}
    <x-slot name="styles">
        <link rel="stylesheet" href="{{asset('css/customStyle.css')}}">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>

        {{--  Recent notices  --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <livewire:dashboard.dashboard-notices />
            </div>
        </div>

    </div>
    <script src="{{ asset('js/noticeAccordion.js') }}"></script>
</x-app-layout>


