<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    <title>Adverto - Serwis ogłoszeniowy</title>  
</head>
<body class="bg-white overflow-x-hidden">
    <header class="flex bg-[#037ab9]">
        <div class="w-screen flex justify-between pt-4 pb-4">
            <div class="w-screen scale-75 ml-10 md:scale-100 md:w-60 md:pl-10">
                <a href="{{url('welcome')}}">
                    <img class="h-full w-full" src="{{ asset('img/images/icons/logo.png') }}" alt="Adverto">
                </a>
            </div>
            <div class="flex inline-block relative">
                <button class="flex group">
                    @if (Route::has('login'))
                        @auth
                            <div class="w-auto bg-inherit text-white">
                                <div class="hover:text-slate-400 pt-1.5">
                                    <span class="inline-flex items-center text-white hover:text-black text-lg">
                                        <i class="fa-solid fa-xl pr-1.5 fa-circle-user "></i><span class="hidden md:flex">Twoje konto</span>
                                    </span>
                                </div>  

                                <ul class="absolute hidden w-40 pt-1 group-hover:block shadow-md text-black text-opacity-16 cursor-auto">
                                    <li class="w-full">
                                        <h5 class="bg-white py-2 px-4 block whitespace-no-wrap font-semibold text-[#11acef]">
                                            Twoje konto
                                        </h5>
                                    </li>
                                    <li class="w-full">
                                        <a
                                        class="bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="{{route('my-account')}}"
                                        >Mój profil</a>
                                    </li>
                                    <li>
                                        <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('my-account.edit') }}">Ustawienia</a>
                                    </li>
                                    <li class="w-full">
                                        <a class="rounded-b bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
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
                <div class="">
                    <button class="relative inline-flex items-center justify-center h-10 p-0.5 mx-10 text-sm font-medium text-gray-900 rounded-full group bg-gradient-to-br from-yellow-400 to-yellow-600 group-hover:from-yellow-400 group-hover:to-yellow-600 font-semibold text-white">
                        <span class="relative px-5 md:py-2 transition-all ease-in duration-75 dark:bg-[#037ab9] rounded-full group-hover:bg-opacity-0">
                            Dodaj ogłoszenie
                        </span>
                    </button>
                </div>
            </div>
        </div>
</header>

        <form action="search.php" method="GET" class="search-form">
            <div class="flex border-2 border-white">
                <input type="search" name="search" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0">                   
                <button type="submit" class="pr-5 bg-white">
                    <i class="fa fa-search bg-white text-xl"></i>
                </button>
            </div>
        </form>

    <div class="mt-5 w-screen  bg-white rounded-lg">
        <ul class="m-5 p-5 grid gap-2 grid-cols-3 md:flex md:justify-center ">
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            
        </ul>
    </div>
    <div>
        <span class="flex flex-col items-center text-white text-lg"><strong>Proponowane ogłoszenia</strong>
        <span>
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 md:grid-cols-4 text-black">
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
    
    <div  class=" sticky top-0 w-full bg-inherit text-white p-4 flex flex-col items-center " >
            <div class="w-screen scale-50 md:scale-100 md:w-60 ">
                <a class="" href="{{ url('welcome') }}">
                    <img class="h-full w-full" src="{{ asset('img/images/icons/logo.png') }}" alt="Adverto">
                </a>
            </div>
            <div class="flex justify-center w-screen md:w-1/2 pt-5">
                <span class="scale-75 md:scale-100">Adverto to darmowe ogłoszenia lokalne w kategoriach: Moda, Zwierzęta, Dla Dzieci, Sport i Hobby, Muzyka i Edukacja. Szybko znajdziesz tu ciekawe ogłoszenia i łatwo skontaktujesz się z ogłoszeniodawcą. Na Adverto czeka na Ciebie praca biurowa, mieszkania, pokoje, samochody. Jeśli chcesz coś sprzedać - w prosty sposób dodasz bezpłatne ogłoszenia. Chcesz coś kupić - tutaj znajdziesz ciekawe okazje, taniej niż w sklepie. Sprzedawaj po sąsiedzku na Adverto<span>
            </div>
    </div>
</body>
</html>
