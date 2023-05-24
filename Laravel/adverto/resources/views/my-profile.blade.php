<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Adverto - Serwis ogłoszeniowy</title>  
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 ">
    <div class="flex">
            <div class="w-screen border-2 flex justify-between pt-5 pb-5">
                <div class="w-60 pl-10">
                    <a href="{{url('welcome')}}">
                        <img class="h-full w-full" src="{{asset('img/images/icons/logo.png')}}" alt="Adverto">
                    </a>
                </div>
                <div class="flex group inline-block relative">                     
                    <button >
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
                    </button>
                    
                </div>
            </div>
        </div>

        <div class=" bg-gradient-to-r from-cyan-500 to-blue-500 mt-10 flex justify-center text-white text-lg space-x-80">
            <div>
                <a href="#"><button>Ogłoszenia</button></a>
            </div>
            <div>
                <a href="{{route('my-profile')}}"><button>Profil</button></a>
            </div>
            <div>
                <a href="{{route('my-account.edit')}}"><button>Ustawienia</button></a>
            </div>
        </div>
        <div class="flex justify-center p-6">
            <div class="w-1/2 h-60 flex flex-col items-center  border-2  text-white justify-center">
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