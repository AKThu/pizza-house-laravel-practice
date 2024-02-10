<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pizza House</title>
        <link rel="shortcut icon" href="../pizza.ico" type="image/x-icon">
        @vite('resources/css/app.css')

    </head>
    <body>
        <nav class="flex flex-row justify-between items-center fixed top-0 z-50 bg-white w-svw drop-shadow-md py-3 px-10">
            <a href="/" class="flex flex-row justify-between items-center text-2xl font-semibold text-primary">
                <img src="../img/pizza.ico" alt="pizza_logo" class="w-8 h-8 mr-2">
                Pizza House
            </a>

            <ul class="flex flex-row space-x-8 font-light">
                @guest
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="#" onclick="profileOnClickHandler()" class="px-2 hover:text-primary">
                            {{ Auth::user()->name }}
                        </a>
                        <div id=logout-container class="hidden">
                            <div class="absolute top-11 overflow-visible bg-slate-100 border-2 border-primary hover:bg-primary hover:text-white drop-shadow-md py-1 px-4 rounded-full">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                    class="text-center">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

        <div class="flex flex-col">
            <div class="h-max bg-[#F2F2F2] text-[#121212]">
                @yield('content')
            </div>
    
            <footer class="bg-stone-200 text-stone-700 p-5 text-center text-xs block">
                Copyright 2024 Pizza House
            </footer>
        </div>

        <script src="../js/layout.js"></script>
    </body>
</html>
