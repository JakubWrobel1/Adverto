<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Rejestracja - Adverto</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
    <div class="bg-white w-screen md:max-w-md md:h-auto h-screen p-5 md:rounded-lg md:shadow-2xl">
    <div class="flex flex-col items-center">
            <div class="mb-5 w-1/2">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
        {{ __('Zapomniałeś hasła? Żaden problem, napisz swój e-mail a my wyślemy do ciebie link z możliwością ustawienia nowego hasła') }}
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <!-- Email Address -->
                <div >
                    
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class=" flex items-center justify-end mt-4 ">
                    <button class="w-screen md:w-1/2 hover:bg-cyan-400 bg-blue-500 md:rounded-full text-xl md:text-lg text-white transition duration-700 transform hover:scale-95" type="submit">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
        </form>
    </div>
<body>