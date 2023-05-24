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
    <div class="h-30 border-2 flex flex-col items-center p-10 m-10">
        <form class="border-2 p-2 w-1/3" action="{{ route('my-account.save') }}" method="POST">
            @csrf
            <div class="pt-3 pb-3">
                <label class="text-white" for="name">Imię:</label>
                <input class=" float-right" type="text" name="name" value="{{ $user->name }}" required>
                
                @error('name')
                    <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                @enderror
       
            </div>
            <div class="pt-3 pb-3">
                <label class="text-white" for="username">Nazwa użytkownika:</label>
                <input class="float-right" type="text" name="username" value="{{ $user->username }}">  
                    @error('username')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror      
            </div>
            <div class="pt-3 pb-3">
                <label class="text-white" for="email">E-mail:</label>
                <input class="float-right" type="email" name="email" value="{{ $user->email }}" required>
                
                @error('email')
                    <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                @enderror
                
            </div>
            <div class="pt-3 pb-3">
                @unless(!($user->password))
                <label class="text-white" for="old_password"> Stare Hasło:</label>
                <input class="float-right" type="password" name="old_password">
                @error('old_password')
                    <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                @enderror
            </div>
            <div class="pt-3 pb-3 mb-10">
                <label class="text-white" for="password">Nowe hasło:</label>
                <input class="float-right" type="password" name="password">
                @error('password')
                    <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                @enderror
            </div>
            @endunless
            </div>
            <div class="flex justify-center pb-5 pt-5  text-black">
                <button class="w-1/2 hover:bg-cyan-400 bg-blue-500 rounded-full h-10  text-xl text-white transition duration-700 transform hover:scale-95" type="submit">Zapisz zmiany</button>
            </div>
        </form>
        <div>
            @unless($user->password)
            <a class="mt-4 pr-2 pl-2 bg-blue-500 rounded-full text-xl text-white flex justify-center h-10 text-white  hover:bg-cyan-400 transition duration-700 transform hover:scale-95" href="{{ route('set-password-form')}}"><button>Ustaw hasło dla swojego konta</button></a>
            @endunless
            </div>
        </div>
    </div>

</body>

</html>