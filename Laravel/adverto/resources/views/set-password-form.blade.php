<head>
    <meta charset="utf-8">

    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Logowanie - Adverto</title>

</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
    <div class="bg-white w-screen md:max-w-md md:h-2/5 h-screen md:rounded-lg  flex flex-col shadow-2xl">
        <div class="justify-center p-3 flex-grow">
            <div class="mb-5 p-2">
                <a href="{{url('welcome')}}">
                    <img class="scale-75" src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
            <form method="POST" action="{{ route('set-password') }}" id="set-password">
                @csrf
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none" type="password" name="password" placeholder="Ustaw hasło dla swojego konta" required />
                    @error('password')
                    <div class="alert alert-danger">
                        @if($message === 'Potwierdzenie pola password nie zgadza się.')
                        Hasła nie są takie same
                        @elseif($message === 'Pole password musi mieć co najmniej 8 znaków.')
                        Hasło musie mieć co najmniej 8 znaków.
                        @endif
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <input class="w-full rounded-lg border-none" type="password" name="password_confirmation" placeholder="Wpisz ponownie hasło" required />
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{$message }}</div>
                    @enderror
                </div>

                <div class="flex justify-center h-12">
                    <button class="w-screen md:w-1/2 hover:bg-cyan-400 bg-blue-500 md:rounded-full  text-xl text-white transition duration-700 transform hover:scale-95 " type="submit">{{__('Zapisz')}}</button>
                </div>
                <p class="pt-5">Jeśli nie ustawisz teraz hasła będziesz mógł to zrobić później w ustawieniach konta</p>
            </form>
        </div>
    </div>
</body>
<script>
    window.addEventListener('beforeunload', function(event) {
        if (!document.getElementById('set-password').checkValidity()) {
            event.returnValue = '';
        }
    });
</script>