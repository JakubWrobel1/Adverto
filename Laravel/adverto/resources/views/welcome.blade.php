@extends('layouts.app')
@section('title', 'Adverto - Serwis ogłoszeniowy')
@section('content')
<form action="search.php" method="GET" class="search-form">
    <div class="flex border-2 border-white">
        <input type="search" name="search" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0">                   
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>

<div class="mt-5 w-screen  bg-white rounded-lg">
        <ul class="m-5 p-5 grid gap-2 grid-cols-3 md:flex md:justify-center ">
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <a href="#"><img class=" h-full w-full scale-75" src="{{ asset('img/images/icons/car.png') }}" alt="car"></a>
                    </div>
                <div class="flex justify-center p-2"><a href="#" class="truncate hover:bg-black hover:text-white">kategoria</a></div>
                </div>
            </li>
            
        </ul>
    </div>
    <div>
        <span class="flex flex-col items-center text-white text-lg"><strong>Proponowane ogłoszenia</strong>
        <span>
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 md:grid-cols-4 text-black">
            <li class="w-auto">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>

            </li> 
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li> 
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li> 
            <li class="w-auto md:w-30">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">Nazwa produktu</a></div>
                    <div class="text-sm">Miejsce i data</div>
                    <div class="p2 text-lg">cena</div>
                </div>
            </li>   
        </ul>  
    </div>
@endsection
