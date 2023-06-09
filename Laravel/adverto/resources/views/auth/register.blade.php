<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Rejestracja - Adverto</title>

    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/register.js') }}"></script>
    
    
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
    <div class="bg-white w-screen  md:max-w-md md:h-4/5 md:rounded-lg  flex flex-col md:shadow-2xl">
        <div class="justify-center p-3 flex-grow">
            <div class="mb-5 p-2">
                <a href="{{url('/')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>

            <div class=" flex flex-col md:flex-row justify-center items-center pb-5">
                <div class="bg-white flex items-center justify-center ">
                    <a href="{{ url('login') }}"><button class="md:hover:text-black text-slate-500 border-b border-black border-x-0 border-t-0 pb-2 p-[33px]">Logowanie</button></a>
                </div>
                <div class="bg-white flex items-center justify-center ">
                    <a href="#"><button class="text-black font-semibold border-b-2 border-black border-x-0 border-t-0 pb-2 p-8">Rejestracja</button></a>
                </div>
            </div>

            <form method="POST" action="{{route('register')}}">
               @csrf
               <div class="flex flex-col mb-2 px-4">
                    <label for="name" class="block mb-2 text-sm">Imię*</label>
                    <input  class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2" type="text" name="name"  value="{{ old('name') }}" required />
                    <span id="nameError" class="text-red-500 text-xs">
                        @error('name') 
                            {{$message }}
                        @enderror
                    </span>
                </div>
               <div class="flex flex-col mb-2 px-4">
                    <label for="username" class="block mb-2 text-sm">Nazwa użytkownika*</label>
                    <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2" type="text" name="username" value="{{ old('username') }}" required />
                    <span id="usernameError" class="text-red-500 text-xs">
                        @error('username')                       
                            <div class="text-red-500">
                                @if($message ==='Taki login już istnieje.')
                                    Nazwa użytkownika jest zajęta
                                @else
                                    {{$message}}
                                @endif</div>
                        @enderror
                    </span>
                </div>
                <div class="flex flex-col mb-2 px-4">
                    <label for="email" class="block mb-2 text-sm">E-mail*</label>
                    <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2" type="email" name="email" value="{{ old('email') }}" required />
                    <span id="emailError" class="text-red-500 text-xs">
                        @error('email')
                            <div class="text-red-500">{{$message }}</div>
                        @enderror
                    </span>
                </div>
                <div class="flex flex-col mb-2 px-4 relative">
                    <label for="password" class="block mb-2 text-sm">Hasło*</label>
                    <div class="relative">
                        <span class="hidden whitespace-nowrap">XXXXXXXXXXXXXXXX</span>
                        <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2 pr-12" type="password" name="password" required />
                        <button id="toggleBtn" type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                    <span id="passwordError" class="text-red-500 text-xs">
                        @error('password')
                            @if ($message === 'Pole password musi mieć co najmniej 8 znaków.')
                                Hasło musi mieć co najmniej 8 znaków.
                            @elseif($message === 'Potwierdzenie pola password nie zgadza się.')
                                Podane hasła nie są takie same.
                            @else
                                {{$message}}
                            @endif
                        @enderror
                    </span>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <p>Akceptuję regulamin sklepu internetowego &ensp;</p>
                    <input type="checkbox" name="terms" required/>
                    @error('terms')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-center mt-10">
                    <button id="submitBtn" class="mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold" type="submit">{{__('Zarejestruj się')}}</button>
                </div>
            </form>
        </div>            
        <div class=" flex flex-col items-center justify-center text-lg bg-gradient-to-r from-cyan-500 to-blue-500 pt-8">
            <h3 class="text-white">Lub zaloguj się za pomocą: </h3>
            <div class="flex justify-center  text-2xl">
                <div class="p-2 hover:text-white ">
                    <a href="/auth/google/redirect"><span class="fab fa-google-plus-g mb-8"></a>
                </div>
            </div>
        </div>
    </div>
</body>