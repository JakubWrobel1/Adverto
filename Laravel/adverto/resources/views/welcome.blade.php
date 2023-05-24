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
    
    <title>Adverto - Serwis ogłoszeniowy</title>  
</head>
<body >
    <div class="flex">
            <div class="w-screen bg-gradient-to-r from-cyan-500 to-blue-500 flex justify-between pt-5 pb-5">
                <div class="w-60 pl-10">
                    <a href="{{url('welcome')}}">
                        <img class="h-full w-full" src="{{asset('img/images/icons/logo.png')}}" alt="Adverto">
                    </a>
                </div>
                <div class="flex group inline-block relative">                     
                    <button >
                        @if (Route::has('login'))
                        @auth
                                <span class="pr-20 text-white hover:text-slate-400 text-lg">Moje konto</span>        
                                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                            <li class="">
                                <a
                                class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="{{route('my-account')}}"
                                >Mój profil</a>
                            </li>
                            <li class="">
                            <a class="class=rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                            </ul>    
                        @else
                        <a href="{{ route('login') }}"class=" hover:text-blue-200 pr-5 text-white text-xl">Logowanie</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"class=" hover:text-blue-200 pr-5 text-white text-xl">Rejestracja</a>
                            @endif
                        @endauth
                        @endif   
                
                    </button>
                    
                </div>
            </div>
        </div>

        <!-- <div id="sideNavContainer" style="display: none;">

        </div> -->

        <div class="w-screen">
            <form action="search.php" method="GET" class="search-form">
                <input type="search" name="search" placeholder="Wyszukaj..." class="w-screen">
                
                <button type="submit" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <div class="mainSectionContainer">


        </div>

    </div>

</body>

</html>