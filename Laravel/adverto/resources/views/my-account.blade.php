@vite('resources/css/app.css')



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
                <a href="#"><button>Profil</button></a>
            </div>
            <div>
                <a href="{{route('my-account.edit')}}"><button>Ustawienia</button></a>
            </div>
        </div>
    </div>  
        <!--
       
        <div id="top" class="bg-white mt-5 flex justify-center w-3/4"><p>Imię: {{ $user->name }}</p></div>

        <p>Nazwa użytkownika: {{ $user->username }}</p>
        <p>Email: {{ $user->email }}</p>
        <a href="{{ route('my-account.edit') }}">Edytuj dane</a>
        <a href="{{ url('welcome')}}"><button>Powrót do strony głównej</button></a>
        </div>-->
    </div>
</body>

</html>