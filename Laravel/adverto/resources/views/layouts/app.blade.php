<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/images/icons/favicon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-white overflow-x-hidden flex flex-col min-h-screen">
    <header class="flex bg-[#037ab9]">
        <div class="w-screen flex items-center justify-between pt-4 pb-4">
            <div class="w-screen scale-75 sm:scale-100 sm:w-60 sm:pl-10">
                <a href="{{url('welcome')}}">
                    <img class="w-36 md:w-48" src="{{ asset('img/images/icons/logo.png') }}" alt="Adverto">
                </a>
            </div>
            <div class="flex inline-block relative">
                <button class="flex group">
                    @if (Route::has('login'))
                    @auth
                    <div class="w-auto bg-inherit text-white mr-10 mt-1.5">
                        <div class="hover:text-slate-400 pt-1.5">
                            <span class="inline-flex items-center text-white hover:text-black text-lg">
                                <i class="fa-solid fa-xl pr-1.5 fa-circle-user "></i><span class="hidden md:flex">Twoje konto</span>
                            </span>
                        </div>

                        <ul class="z-10 absolute hidden w-40 pt-1 group-hover:block shadow-md text-black text-opacity-16 cursor-auto">
                            <li class="w-full">
                                <h5 class="bg-white py-2 px-4 block whitespace-no-wrap font-semibold text-[#11acef]">
                                    Twoje konto
                                </h5>
                            </li>
                            <li class="w-full">
                                <a class="bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{route('my-profile')}}">Mój profil</a>
                            </li>
                            <li class="w-full">
                                <a class="bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('advertisements.myAdvertisements') }}">Moje ogłoszenia</a>
                            </li>
                            <li>
                                <a class="bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('my-account.edit') }}">Ustawienia</a>
                            </li>
                            @if (Auth::user() && Auth::user()->is_admin)
                            <li><a class="bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{url('/users')}}">Zarządzaj użytkownikami</a></li>
                            @endif

                            <li class="w-full">
                                <a class="rounded-b bg-white hover:bg-[#005a97] hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                            <a href="{{ route('login') }}" class="flex items-center justify-center pr-5 mt-6 sm:mt-4  fa-solid fa-right-to-bracket text-xl "></a>
                        </div>
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

                <a href="{{ route('create-ad') }}" class="rounded-full px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-yellow-400 text-white mr-10">
                    <span class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-400 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                    <span class="relative text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] transition duration-500 ease">Dodaj ogłoszenie</span>
                </a>



            </div>
        </div>
    </header>

    @yield('content')
    <div class="bg-[#037ab9] mt-auto">
        <div class=" sticky top-0 w-full bg-inherit text-white p-4 flex flex-col items-center ">
            <div class="w-screen scale-50 md:scale-100 md:w-60 ">
                <a class="" href="{{ url('welcome') }}">
                    <img class="h-full w-full" src="{{ asset('img/images/icons/logo.png') }}" alt="Adverto">
                </a>
            </div>
            <div class="flex justify-center w-screen md:w-1/2 pt-5">
                <span class="scale-75 md:scale-100">Adverto to darmowe ogłoszenia lokalne w kategoriach: Moda, Zwierzęta, Dla Dzieci, Sport i Hobby, Muzyka i Edukacja. Szybko znajdziesz tu ciekawe ogłoszenia i łatwo skontaktujesz się z ogłoszeniodawcą. Na Adverto czeka na Ciebie praca biurowa, mieszkania, pokoje, samochody. Jeśli chcesz coś sprzedać - w prosty sposób dodasz bezpłatne ogłoszenia. Chcesz coś kupić - tutaj znajdziesz ciekawe okazje, taniej niż w sklepie. Sprzedawaj po sąsiedzku na Adverto<span>
            </div>
        </div>
    </div>
</body>

</html>