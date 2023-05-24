<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Logowanie - Adverto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center ">
    <div class="bg-white w-1/3 h-4/5 rounded-lg  flex flex-col shadow-2xl">
        <div class="w-full  justify-center p-3 flex-grow">
            <div class=" mb-5 p-2">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none" type="text" name="login" placeholder="Nazwa użytkownika/e-mail" required/>
                    @error('login')
                        <div class="text-red-500">{{$message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none" type="password" name="password" placeholder="Hasło"  required />
                    @error('password')
                        <div class="alert alert-danger">{{$message }}</div>
                    @enderror
                </div>
                <div class="flex justify-center h-10">
                    <button class="w-1/2 hover:bg-cyan-400 bg-blue-500 rounded-full  text-xl text-white transition duration-700 transform hover:scale-95 " type="submit">{{__('Zaloguj')}}</button>
                </div>
                
                
            </form>
            <div class="flex justify-center">
                <a href="{{url('register')}}" class="w-1/2  bg-blue-500 rounded-full text-xl text-white flex justify-center h-10 mb-10 text-white  hover:bg-cyan-400 transition duration-700 transform hover:scale-95"><button >Zarejestruj się</button></a>
            </div>         
        @if (Route::has('password.request'))
                <a class="hover:text-cyan-600 transition duration-700" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
                @endif
            </div>
        <div class=" flex flex-col items-center text-lg bg-gradient-to-r from-cyan-500 to-blue-500">
            <h3>Lub zaloguj się za pomocą: </h3>
            <div class="flex justify-center mb-10">
                <div class="p-2 hover:text-white">
                    <a href="/auth/facebook/redirect"><sapn class="fab fa-facebook"></a>
                </div>
                <div class="p-2 hover:text-white">
                    <a href="/auth/google/redirect"><span class="fab fa-google-plus-g"></a>
                </div>
            </div>
        </div>
    </div>
</body>