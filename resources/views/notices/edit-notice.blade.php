<x-app-layout>
    <x-slot name="header">
        <div class="font-bold text-xl">
            Edit Notice
        </div>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-indigo-400 border-b border-gray-200 shadow-lg">
                {{-- Validation Errors --}}
                <x-auth-validation-errors />

                {{-- Success message --}}
                <x-success-message />

                <form action="{{ route('notice.update' , $notice) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-6">
                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <x-label for="title" :value="__('Title')" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    value="{{ $notice->title }}" autofocus />
                            </div>
                            <div>
                                <x-label for="body" :value="__('Body')" />
                                <x-textarea name="body" id="body" rows="5" >
                                    <x-slot name="content">
                                        {{ $notice->body }}
                                    </x-slot>
                                </x-textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</x-app-layout>
