@extends('layouts.app')
@section('title', $advertisement->title)
@section('content')
<form action="{{ route('advertisements.advertisementSearch') }}" method="GET" class="search-form">
    <div class="flex border-2 border-white md:px-56 py-12 bg-[#f2f4f5]">
        <i class="fa fa-magnifying-glass pt-5 text-[#6b7280] p-4 bg-white"></i>
        <input type="search" name="query" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0 h-14 flex bg-white p-2 md:w-11/12">
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>

<div class="flex justify-center items-center bg-[#f2f4f5] overflow-x-hidden">
    <div class="max-w-screen-xl m-5">
        <div class="grid md:grid-cols-3 gap-8 mx-4">
            <div class="p-5 flex flex-col justify-center bg-white col-span-2 rounded-lg">
                <div class="flex justify-center items-center">
                    <div class="container flex items-center justify-center">
                        <!-- Slider main container -->
                        <div class="swiper md:w-9/12 h-fit">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @if ($advertisement->images->isNotEmpty())
                                @foreach ($advertisement->images->reverse() as $image)
                                <div class="swiper-slide">
                                    <img class="w-full" src="{{ asset('images/' . $image->url) }}" alt="ad-image">
                                </div>
                                @endforeach
                                @else
                                <div class="swiper-slide">
                                    <img class="w-full bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}" alt="no-image">
                                </div>
                                @endif
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="m-5">
                    <div class="pb-5">
                        <h2 class="text-lg md:text-4xl whitespace-pre-line break-all">{{ $advertisement->title }}</h2>
                    </div>
                    <div class="pb-10">
                        <p class="text-4xl font-bold">{{ $advertisement->price }} zł</p>
                    </div>
                    <div>
                        <p class="pb-5 font-bold">Opis:</p>
                        <p class="whitespace-pre-line">{{ $advertisement->description }}</p>
                    </div>
                    @auth
                    @if ($advertisement->user_id === auth()->user()->id || Auth::user()->is_admin)
                    <div class="flex justify-center pt-24">
                        <form action="{{ route('advertisement.delete', $advertisement) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to ogłoszenie?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="m-2 px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600 transition-colors duration-300">Usuń</button>
                        </form>
                        <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-primary">
                            <button class="m-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition-colors duration-300">Edytuj</button>
                        </a>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>

            <div class="flex justify-center bg-white p-5 rounded-lg h-96 w-screen md:w-96 md:min-w-fit whitespace-pre-line break-words">
                <div class="md:w-96 flex justify-center md:grid md:grid-cols-2 items-start">
                    <div class="flex flex-col w-full">
                        <p>Imię: {{$user->name}}</p><br>
                        <p>Email: {{$user->email}}</p><br>
                        <p>Telefon: {{$user->phone_number}}</p><br>
                        <p>Lokalizacja: {{$advertisement->location->city}}</p>
                    </div>
                    <div>
                        <img src="{{url('/img/images/icons/avatar.png')}}" alt="avatar" class="h-32 w-32 mx-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endsection