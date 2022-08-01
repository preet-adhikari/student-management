<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teachers') }}
        </h2>
    </x-slot>
    {{--    Table--}}
    <livewire:users.index-users :users="$teachers" />

</x-app-layout>

{{--<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">--}}
{{--    <a href="{{ route('teacher.edit', $teacher) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
{{--</td>--}}
