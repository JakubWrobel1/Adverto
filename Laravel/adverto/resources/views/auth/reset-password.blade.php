<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset hasła - Adverto</title>
    
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('img/images/icons/favicon.png')}}">
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{asset('js/register.js') }}"></script>
</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
    <div class="bg-white w-screen  md:max-w-md md:h-4/5 md:rounded-lg  flex flex-col md:shadow-2xl">
        <div class="justify-center p-3 flex-grow">
            <div class="mb-5 p-2">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
            <form method="POST" action="{{route('password.store')}}">
               @csrf
               <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="flex flex-col mb-2 px-4">
                    <label for="email" class="block mb-2 text-sm">E-mail*</label>
                    <x-text-input id="email" class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
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
                    </div>
                    <div class="flex flex-col mb-2 px-4 relative">
                        <label for="password_confirmation" class="block mb-2 text-sm">Potwierdź hasło</label>
                        <div class="relative">
                            <span class="hidden whitespace-nowrap">XXXXXXXXXXXXXXXX</span>
                            <input class="w-full rounded-sm border-none bg-[#f2f4f5] shadow-sm mb-2 pr-12" type="password" name="password_confirmation" required />
                            <button id="toggleBtn" type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>
                <div class="flex justify-center mt-10">
                    <button id="submitBtn" class="mx-4 h-12 w-screen md:w-full md:rounded-md text-xl text-[#7F9799] bg-[#D8DFE0] font-semibold" type="submit">{{__('Zapisz hasło')}}</button>
                </div>
            </form>
        </div>            
    </div>
</body>