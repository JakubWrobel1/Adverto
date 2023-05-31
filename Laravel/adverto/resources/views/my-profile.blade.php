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
<body class="bg-white">
        <header class="flex bg-[#037ab9]">
            <div class="w-screen flex justify-between pt-4 pb-4">
                <div class="w-screen scale-75  md:scale-100 md:w-60 md:pl-10">
                    <a href="{{url('welcome')}}">
                        <img class="h-full w-full" src="{{asset('img/images/icons/logo.png')}}" alt="Adverto">
                    </a>
                </div>
                <div class="flex inline-block relative">                     
                    <button class="flex group pt-2">   
                        <div class="w-auto bg-inherit text-white hover:text-black">
                            <div class="">
                                <span class="text-white hover:text-black text-lg">
                                    <i class="fa-solid fa-xl pr-1.5 fa-circle-user"></i>Moje konto
                                </span>
                            </div>        
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
                                    </span>
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
                    <button class="relative inline-flex items-center justify-center h-11 p-0.5 mx-10 overflow-hidden text-sm font-medium text-gray-900 rounded-full group bg-gradient-to-br from-yellow-400 to-yellow-600 group-hover:from-yellow-400 group-hover:to-yellow-600 font-semibold text-white">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-[#037ab9] rounded-full group-hover:bg-opacity-0">
                            Dodaj ogłoszenie
                        </span>
                    </button>
                </div>
            </div>
        </header>

        <div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4 p-4">     
            <div class="bg-white md:m-0 md:pr-0 md-pl-0 mb-1 border-2 p-3 w-screen flex items-center justify-center ">
                <a href="#"><button class="md:hover:text-slate-500">Ogłoszenia</button></a>
            </div>
            <div class="bg-white md:m-0 md:pr-0 md-pl-0 mb-1 p-3 border-2 w-screen flex items-center justify-center">
                <a  href="{{route('my-profile')}}"><button class="underline underline-offset-4 md:hover:text-slate-500 ">Profil</button></a>
            </div>
            <div class="bg-white md:m-0 md:pr-0 md-pl-0 mb-1 p-3 border-2 w-screen flex items-center justify-center">
                <a href="{{route('my-account.edit')}}"><button class="md:hover:text-slate-500">Ustawienia</button></a>
            </div>
        </div>
        <div class="flex justify-center pt-5 md:p-6">
            <div class="bg-white w-screen md:w-1/4 md:h-60 flex flex-col items-center  border-2  justify-center md:rounded-lg">
                <div class="p-2">
                    <p>Imię: {{ $user->name }}</p>
                </div>
                <div class="p-2"><p>Nazwa użytkownika: {{ $user->username }}</p></div>
                <div class="p-2"><p>Email: {{ $user->email }}</p></div>
            </div>
        </div>
        </div>
    </div>

</body>

</html>