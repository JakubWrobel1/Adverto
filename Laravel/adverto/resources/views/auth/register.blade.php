<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Rejestracja - Adverto</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center ">
    <div class="bg-white w-screen md:max-w-md md:h-4/5 h-screen md:rounded-lg  flex flex-col shadow-2xl">
        <div class="justify-center p-3 flex-grow">
        <div class="mb-5 p-2">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
            <form method="POST" action="{{route('register')}}">
               @csrf
               <div class="flex flex-col mb-4">
                    <input  class="w-full rounded-lg border-none  " type="text" name="name" placeholder="Imię i nazwisko*" value="{{ old('name') }}" required />
                    @error('name')
                        <div class="text-red-500">
                            {{$message }}
                        </div>
                    @enderror
                </div>
               <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none  " type="text" name="username" placeholder="Nazwa użytkownika" value="{{ old('username') }}" required />
                    @error('username')                       
                        <div class="text-red-500">
                            @if($message ==='Pole username już istnieje.')
                                Nazwa użytkownika jest zajęta
                             @else
                                {{$message}}
                            @endif</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none  " type="email" name="email" placeholder="Email*"  value="{{ old('email') }}" required />
                    @error('email')
                        <div class="text-red-500">{{$message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                <input class="w-full rounded-lg border-none  " type="password" name="password" placeholder="Hasło*" required/>
                    @error('password')
                        <div class="text-red-500">
                            @if ($message === 'Pole password musi mieć co najmniej 8 znaków.')
                                Hasło musi mieć co najmniej 8 znaków.
                            @elseif($message === 'Potwierdzenie pola password nie zgadza się.')
                                Podane hasła nie są takie same
                               
                            @else
                                {{$message}}
                            @endif
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none  " type="password" name="password_confirmation" placeholder="Wpisz ponownie hasło*" />                  
                </div>
                <div class="flex justify-center items-center mb-4">
                    
                    <p>Akceptuję regulamin sklepu internetowego &ensp;</p>
                    <input type="checkbox" name="terms" required/>
                    @error('terms')
                        <div class="text-red-500">{{$message }}</div>
                    @enderror
                </div>
                <div class="flex justify-center h-12">
                    <button type="submit" class="w-screen md:w-1/2 hover:bg-cyan-400 bg-blue-500 md:rounded-full  text-xl text-white transition duration-700 transform hover:scale-95">Zarejestruj się</button>
                </div>
            </form>
            <div class="flex justify-center">
                <a href="{{url('login')}}" class="w-screen md:w-1/2  bg-blue-500 md:rounded-full text-xl text-white flex justify-center h-12 mb-10 text-white  hover:bg-cyan-400 transition duration-700 transform hover:scale-95"><button>Zaloguj się</button></a>
            </div>
        </div>

                    
        <div class="  flex flex-col items-center text-lg bg-gradient-to-r from-cyan-500 to-blue-500">
            <h3 class="text-white">Lub zaloguj się za pomocą: </h3>
            <div class="flex justify-center mb-10 text-2xl">
                <div class="p-2 hover:text-white">
                    <a href="/auth/facebook/redirect"><sapn class="fab fa-facebook"></a>
                </div>
                <div class="p-2 hover:text-white ">
                    <a href="/auth/google/redirect"><span class="fab fa-google-plus-g"></a>
                </div>
            </div>
        </div>
    </div>
</body>