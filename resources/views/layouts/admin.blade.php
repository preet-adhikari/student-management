<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    @if(isset($styles))
        {{ $styles }}
    @endif

    {{--  Scripts  --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body style="background: #edf2f7">
    <div class="w-full h-screen flex flex-col">
        @include('partials.admin.navigation')

        <div class="relative min-h-screen md:flex">
            {{--    Sidebar    --}}
            <div class="sidebar bg-gray-100 text-gray-900 w-64 px-2 space-y-6 py-4 absolute md:relative md:translate-x-0 inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out">
                <div>
                    <a href="" class="block py-2 px-4 rounded hover:bg-gray-200 transition duration-200">Staff Members</a>
                    <a href="" class="block py-2 px-4 rounded hover:bg-gray-200 transition duration-200">Classes</a>
                    <a href="" class="block py-2 px-4 rounded hover:bg-gray-200 transition duration-200">Materials</a>
                    <a href="" class="block py-2 px-4 rounded hover:bg-gray-200 transition duration-200">Contact</a>

                </div>
            </div>
            <!-- content -->
            <div class="flex-1 p-10 text-2xl font-bold bg-gray-100">
                {{ $content }}
            </div>
        </div>
    </div>
    <script>
        // grab everything we need
        const btn = document.querySelector(".mobile-menu-button");
        const sidebar = document.querySelector(".sidebar");

        // add our event listener for the click
        btn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    </script>
</body>
</html>
