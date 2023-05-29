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
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 ">
        <header class="flex">
            <div class="w-screen flex justify-between pt-5 pb-5">
                <div class="w-screen scale-75  md:scale-100 md:w-60 md:pl-10">
                    <a href="{{url('welcome')}}">
                        <img class="h-full w-full" src="{{asset('img/images/icons/logo.png')}}" alt="Adverto">
                    </a>
                </div>
                <div class="flex group inline-block relative">                     
                    <button class="flex pt-2">   
                    <div class="w-auto bg-inherit text-white">
                                <div class="hover:text-slate-400">
                                <span class="invisible md:visible">Moje konto</span>
                                <span class="flex justify-center pr-5 fa-solid fa-user md:text-sm text-2xl"></span></div>        
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
                        </div> 
                    </button>
                    
                </div>
            </div>
        </header>

        <div class=" w-screen bg-gradient-to-r from-cyan-500 to-blue-500 md:mt-10  flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4 ">     
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