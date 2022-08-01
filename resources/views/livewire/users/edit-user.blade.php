<div class="p-8">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    <form wire:submit.prevent="update">
        <div class="grid grid-cols-2 gap-6">
            <div class="grid grid-rows-2 gap-6">
                <div>
                    <x-label for="name" :value="__('Name')"/>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                             value="{{ $teacher->name }}" autofocus/>
                </div>
                <div>
                    <x-label for="phone_number" :value="__('Phone Number')"/>
                    <x-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                             value="{{ $teacher->phone_number }}" autofocus/>

                </div>

            </div>
            <div class="grid grid-rows-2 gap-6">
                <div>
                    <x-label for="address" :value="__('Address')"/>
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                             value="{{ $teacher->address }}" autofocus/>

                </div>
                <div>
                    <x-label for="email" :value="__('Email')"/>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                             value="{{ $teacher->email }}" autofocus/>
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

    </form>
</div>
