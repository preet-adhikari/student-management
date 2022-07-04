<x-app-layout>
    <x-slot name="header">
        <div class="font-bold text-xl">
            Notice from the {{ $notice->users->role->designation }}
        </div>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-custom-notice>
                <h3 class="text-center font-bold">
                    {{$notice->title}}
                </h3>    
            </x-custom-notice>
            <x-custom-notice>
                {!! $notice->body !!}
            </x-custom-notice>
            <div class="mt-4">
                <a class="mt-4 p-2 px-4  border-2 border-gray-900 rounded-md shadow-lg " href="{{ route('notice.edit' , $notice) }}">
                    Edit
                </a>
            </div>
        </div>
        
    </div>

</x-app-layout>