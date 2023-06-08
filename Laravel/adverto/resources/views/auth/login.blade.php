<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Logowanie - Adverto</title>
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/login.js') }}"></script>
    
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center ">
    <div class="bg-white w-screen md:max-w-md md:h-4/5 h-screen md:rounded-sm  flex flex-col shadow-2xl">
        <div class="justify-center p-3 flex-grow">
            <div class=" mb-5 p-2">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>

            <div class=" flex flex-col md:flex-row justify-center items-center pb-5">
                <div class="bg-white flex items-center justify-center ">
                    <a href="#"><button class="text-black font-semibold border-b-2 border-black border-x-0 border-t-0 pb-2 p-8">Logowanie</button></a>
                </div>
                <div class="bg-white flex items-center justify-center ">
                    <a  href="{{url('register')}}"><button class="md:hover:text-black text-slate-500 border-b border-black border-x-0 border-t-0 pb-2 p-[33px]">Rejestracja</button></a>
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col mb-4 px-4 pb-2">
                    <label for="login" class="block mb-2 text-sm">Login/e-mail</label>
                    <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm" type="text" name="login" required/>
                    <span id="loginError" class="text-red-500 text-xs"></span>
                </div>
                <div class="flex flex-col mb-4 px-4">
                    <label for="password" class="block mb-2 text-sm">Hasło*</label>
                    <div class="relative">
                        <span class="hidden whitespace-nowrap">XXXXXXXXXXXXXXXX</span>
                        <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2 pr-12" type="password" name="password" required />
                        <button id="toggleBtn" type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                            <i class="fa fa-eye"></i>
                        </button>
                        <span id="passwordError" class="text-red-500 text-xs"></span>
                    </div>
                    <span id="nameError" class="text-red-500 text-xs">
                        @error('login')
                            <div class="text-red-500">{{$message }}</div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                    </span>
                </div>
                @if (Route::has('password.request'))
                <a class="text-lg hover:text-cyan-600 transition duration-700 p-4 text-sm font-bold" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
                @endif
                <div class="flex justify-center mt-10">
                    <button id="submitBtn" class="mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold" type="submit">{{__('Zaloguj się')}}</button>
                </div>
            </form>
        </div>
        <div class=" flex flex-col items-center justify-center text-lg bg-gradient-to-r from-cyan-500 to-blue-500 pt-10">
            <h3 class="text-white">Lub zaloguj się za pomocą: </h3>
            <div class="flex justify-center  text-2xl">
                <div class="p-2 hover:text-white ">
                    <a href="/auth/google/redirect"><span class="fab fa-google-plus-g mb-10"></a>
                </div>
            </div>
        </div>
    </div>
</body>