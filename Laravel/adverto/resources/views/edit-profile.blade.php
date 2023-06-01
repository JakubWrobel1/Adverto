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
                    <img class="h-full w-full" src="{{asset('img/images/icons/logo.png')}}" alt="Adverto">
                </a>
            </div>
            <div class="flex inline-block relative">                     
                <button class="flex group">   
                    <div class="w-auto bg-inherit text-white hover:text-black">
                        <span class="inline-flex items-center text-white hover:text-black text-lg pt-1.5">
                            <i class="fa-solid fa-xl pr-1.5 fa-circle-user"></i><span class="hidden md:flex">Twoje konto</span>
                        </span>     
                        <ul class="absolute hidden w-40 pt-1 group-hover:block shadow-md text-black text-opacity-16 cursor-auto">
                            <li class="w-full">
                                <span class="flex items-center rounded-t bg-white pt-4 pb-2 px-11">
                                    <i class="text-gray-500 text-2xl pr-2.5 fa-solid fa-user-tie"></i>
                                    {{ $user->username }}
                                </span>
                            </li>
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
    <div class=" w-screen md:mt-10 justify-center items-center text-3xl font-semibold">
        <div class="bg-white md:ml-20 md:pr-0 md:pl-0 w-screen">
            <h1 class="text-[#037ab9]">Ustawienia</h1>
        </div>
    </div>
    <div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4">     
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center ">
            <a href="#"><button class="md:hover:text-black text-slate-500">Ogłoszenia</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <a  href="{{route('my-profile')}}"><button class="md:hover:text-black text-slate-500">Profil</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <div class="underline underline-offset-4">Ustawienia</div>
        </div>
    </div>
    <div class="flex justify-center pt-5 md:p-6 bg-[#f2f4f5]">
        <div class=" md:focus:ring-0 md:w-auto w-screen bg-white md:rounded-lg flex-col items-center p-10 border-2 ">
            <form class="p-2" action="{{ route('my-account.save') }}" method="POST">
                @csrf
                <div class="pt-3 pb-3">
                    <label class="" for="name">Imię:</label>
                    <div>
                        <input class="" type="text" name="name" value="{{ $user->name }}" required>
                    </div>
                    @error('name')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
        
                </div>
                <div class="pt-3 pb-3">
                    <label class="" for="username">Nazwa użytkownika:</label>
                    <div><input class="" type="text" name="username" value="{{ $user->username }}"> </div>
                        @error('username')
                            <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                        @enderror      
                </div>
                <div class="pt-3 pb-3">
                    <label class="" for="email">E-mail:</label>
                    <div><input class="" type="email" name="email" value="{{ $user->email }}" required></div>
                    @error('email')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                    
                </div>
                <div class="pt-3 pb-3">
                    @unless(!($user->password))
                    <label class="" for="old_password"> Stare Hasło:</label>
                    <div><input class="" type="password" name="old_password"></div>              
                    @error('old_password')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                </div>
                <div class="pt-3 pb-3 mb-10">
                    <label class="" for="password">Nowe hasło:</label>
                    <div><input class="" type="password" name="password"></div>
                    @error('password')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                    </div>
                @endunless
                <button class="hover:bg-blue-500 bg-[#037ab9] w-full text-white rounded-full text-lg h-10 transition duration-700 transform hover:scale-95" type="submit">Zapisz zmiany</button>
                </div>
            </form>
            <div>
                @unless($user->password)
                <a class="mt-4 pr-2 pl-2 bg-blue-500 rounded-full text-xl text-white flex justify-center h-10 text-white  hover:bg-cyan-400 transition duration-700 transform hover:scale-95" href="{{ route('set-password-form')}}"><button>Ustaw hasło dla swojego konta</button></a>
                @endunless
                </div>
            </div>
        </div>
    </div>
</body>
</html>