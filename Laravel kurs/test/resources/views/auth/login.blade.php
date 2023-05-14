<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Logowanie - Adverto</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <!-- My CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Quicksand Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    <!-- JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <!-- My JavaScript file-->
    <script src="./assets/js/commonActions.js"></script>
</head>
<body>
    <div class="signup-wrap">
        <div class="signup-top">
            <div class="signup-logo">
                <a href="{{url('welcome')}}">
                    <img src="{{asset('img/images/icons/logo_blue.png')}}" alt="KlikShop">
                </a>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-wrap">
                    <input type="text" name="username" placeholder="Nazwa użytkownika"/>
                    @error('username')
                        <div class="alert alert-danger">{{$message }}</div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <input type="password" name="password" placeholder="Hasło" />
                    @error('password')
                        <div class="alert alert-danger">{{$message }}</div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <button type="submit">{{__('Zaloguj')}}</button>
                </div>
                @if (Route::has('password.request'))
                <a class="#link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                
            </form>            
        </div>
        <div class="signup-bottom">
            <h3>Lub zaloguj się za pomocą: </h3>
            <div class="link-container">
                <ul>
                    <li><i class="fab fa-facebook"></i></li>
                    <a href="#/auth/google/redirect"><li><i class="fab fa-google-plus-g"></i></li></a>
                </ul>
            </div>
        </div>
    </div>
</body>