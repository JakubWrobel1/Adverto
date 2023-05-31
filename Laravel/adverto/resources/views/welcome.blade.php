<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adverto - Serwis ogłoszeniowy</title>  
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 overflow-x-hidden">
    <div class="flex">
        <div class=" w-screen bg-gradient-to-r from-cyan-500 to-blue-500 flex justify-between pt-5 pb-5">
            <div class="w-screen scale-75 md:scale-100 md:w-60 md:pl-10">
                <a href="{{ url('welcome') }}">
                    <img class="h-full w-full" src="{{ asset('img/images/icons/logo.png') }}" alt="Adverto">
                </a>
            </div>
            <div class="flex group inline-block relative">
                <button class="flex pt-2">
                    @if (Route::has('login'))
                        @auth
                            <div class="w-auto bg-inherit text-white">
                                <div class="hover:text-slate-400">
                                    <span class="invisible md:visible">Moje konto </span>
                                    <span class="flex justify-center pr-5 fa-solid fa-user md:text-sm text-2xl"></span>
                                </div>        
                                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                                    <li>
                                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('my-profile') }}">Mój profil</a>
                                    </li>
                                    <li>
                                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Wyloguj') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>    
                        @else
                            <div class="w-auto md:hidden bg-inherit text-white">
                                <div class="hover:text-slate-400">
                                    <span class="invisible md:flex">Moje konto </span>
                                    <span class="flex justify-center items-center md:pr-5 fa-solid fa-right-to-bracket md:text-sm text-2xl"></span>
                                </div>        
                                <ul class="absolute hidden text-gray-700 pt-5 md:pt-20 md:mr-20 group-hover:block">
                                    <li>
                                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 block whitespace-no-wrap" href="{{ route('login') }}">Zaloguj</a>
                                    </li>
                                    <li>
                                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 md:px-4 block whitespace-no-wrap" href="{{ route('register') }}">Zarejestruj się</a>
                                    </li>
                                </ul>
                            </div>    

                            <div class="hidden md:flex w-auto bg-inherit text-white">
                                <a href="{{ route('login') }}" class="hover:text-blue-200 pr-5 text-xl">Logowanie</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="hidden md:flex md:w-auto md:bg-inherit md:text-white">
                                    <a href="{{ route('register') }}" class="hover:text-blue-200 pr-5 text-xl">Rejestracja</a>
                                </div>
                            @endif
                        @endauth
                    @endif     
                </button>
            </div>
        </div>
    </div>

        <form action="search.php" method="GET" class="search-form">
            <div class="flex border-2 border-white">
                <input type="search" name="search" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0">                   
                <button type="submit" class="pr-5 bg-white">
                    <i class="fa fa-search bg-white text-xl"></i>
                </button>
            </div>
        </form>
    <div>
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 md:grid-cols-4 ">
            <li class="w-auto">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>  
        </ul>  
    </div>
    
</body>
</html>
