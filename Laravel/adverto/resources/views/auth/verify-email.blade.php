<head>
    <meta charset="utf-8">

    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weryfikacja e-mail - Adverto</title>

    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('img/images/icons/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
    <div class="bg-white w-screen  h-screen md:max-w-md md:h-1/3 md:rounded-lg  flex flex-col md:shadow-2xl">
        <div class="justify-center p-3 flex-grow">
            <div class="mb-5 p-2 scale-75 md:scale-100">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="Adverto">
                </a>
            </div>
            <div class="mb-4 text-sm text-black">
                {{ __('Serdecznie dziękujemy za rejestrację na naszej platformie! Cieszymy się, że dołączyłeś do naszej społeczności i mamy nadzieję, że będziesz czerpać z niej wiele korzyści.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('Link do weryfikacji został pomyślnie wysłany na twój adres e-mail.') }}
            </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="hover:underline hover:text-slate-500">{{ __('Wyślij ponownie link do weryfikacji') }}</button>
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="relative inline-flex items-center justify-center h-10 p-0.5 mx-10 text-sm font-medium text-gray-900 rounded-full group bg-gradient-to-br from-yellow-400 to-yellow-600 group-hover:from-yellow-400 group-hover:to-yellow-600 font-semibold text-white">
                        <span class="relative px-5 py-2 transition-all ease-in duration-75 dark:bg-[#037ab9] rounded-full group-hover:bg-opacity-0">
                            {{__('Wyloguj')}}
                        </span>
                    </button>
                </form>
            </div>
        </div>
</body>