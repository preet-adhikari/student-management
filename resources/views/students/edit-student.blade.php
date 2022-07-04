<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                                <x-auth-validation-errors :errors="$errors"/>
                                <x-success-message />
                                    <form action="{{ route('student.update' , $student) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="grid grid-cols-2 gap-6">
                                            <div class="grid grid-rows-2 gap-6">
                                                <div>
                                                    <x-label for="name" :value="__('Student Name')"/>
                                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                             value="{{ $student->name }}" autofocus/>
                                                </div>
                                                <div>
                                                    <x-label for="phone_number" :value="__('Student Phone Number')"/>
                                                    <x-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                                                             value="{{ $student->phone_number }}" autofocus/>

                                                </div>

                                            </div>
                                            <div class="grid grid-rows-2 gap-6">
                                                <div>
                                                    <x-label for="address" :value="__('Student Address')"/>
                                                    <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                                                             value="{{ $student->address }}" autofocus/>

                                                </div>
                                                <div>
                                                    <x-label for="email" :value="__('Student Email')"/>
                                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                             value="{{ $student->email }}" autofocus/>
                                                </div>
                                            </div>
                                            {{-- For Admin only--}}
                                            @can('admin-only')
                                                <div class="grid grid-rows-1 gap-6">
                                                    <div>
                                                        <x-label for="new_password" :value="__('New password')"/>
                                                        <x-input id="new_password" class="block mt-1 w-full"
                                                                 type="password"
                                                                 name="password"
                                                                 autocomplete="new-password"/>
                                                    </div>
                                                </div>
                                                <div class="grid grid-rows-1 gap-6">
                                                    <div>
                                                        <x-label for="confirm_password" :value="__('Confirm password')"/>
                                                        <x-input id="confirm_password" class="block mt-1 w-full"
                                                                 type="password"
                                                                 name="password_confirmation"
                                                                 autocomplete="confirm-password"/>
                                                    </div>
                                                </div>
                                            @endcan


                                        </div>
                                        @can('admin-and-principal')
                                            <div class="flex items-center justify-end mt-4">
                                                <x-button class="ml-3">
                                                    {{ __('Update') }}
                                                </x-button>
                                            </div>
                                        @endcan
                                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
