<x-admin-layout>
    <x-slot name="content">

        <div class="mt-6 md:grid md:grid-cols-4 md:gap-10">
            @foreach($grades as $grade)
                <a href="{{ route('grade.show' , $grade) }}">
                    <div class="bg-gray-500 rounded-xl shadow-xl m-3 mb-3 p-4 text-center m-auto md:w-full sm:mb-5">
                        Class {{$grade->name}}
                    </div>
                </a>
            @endforeach
        </div>
    </x-slot>
</x-admin-layout>
