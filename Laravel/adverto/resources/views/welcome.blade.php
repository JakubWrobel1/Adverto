<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    
    <!-- Mobile responsibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Adverto - Serwis ogłoszeniowy</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <!-- My CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    <!-- JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f810359848.js" crossorigin="anonymous"></script>
    
    <!-- My JavaScript file-->
    <script src="./assets/js/commonActions.js"></script>
</head>
<body>

    <div class="pageContainer">

        <!-- header -->
        <header>

            <!-- header inner -->
            <div class="header">
                <!-- <button class="navShowHide">
                    <img src="assets/images/icons/menu.png">
                </button> -->
                <a href="{{url('welcome')}}">

                    <img src="{{asset('img/images/icons/logo.png')}}" alt="Adverto" class="logo">

                </a>

                <div class="header-right">
                    
                    <button class="loginSection">
                        <div class="icon-text-wrapper">
                        @if (Route::has('login'))
                        @auth
                            <a href="{{route('my-account')}}">
                            <i class="fa-light fa-circle-user" style="color: #ffffff;"></i>
                            <span>Moje konto</span>
                            </a>
                        
                        @else
                        <a href="{{ route('login') }}">logowanie</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">register</a>
                            @endif
                        @endauth
                        @endif
                        </div>
                    </button>

                </div>

                
                <!-- <ul>
                    <li class="dropdown">
                        <a href="#">Moje konto</a>
                        <div class="dropdown-content">
                            <a href="./logout.php">Wyloguj</a>
                        </div>
                    </li>
                </ul> -->
            </div>

        </header>

        <!-- <div id="sideNavContainer" style="display: none;">

        </div> -->

        <div class="search-container">
            <form action="search.php" method="GET" class="search-form">
                <input type="search" name="search" placeholder="Wyszukaj...">
                
                <button type="submit" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <div class="mainSectionContainer">


        </div>

    </div>

</body>
</html>