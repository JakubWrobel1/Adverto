@extends('layouts.app')
@section('title', 'Adverto - Serwis ogłoszeniowy')
@section('content')
<form action="{{route('advertisements.advertisementSearch')}}" method="GET" class="search-form">
    <div class="flex border-2 border-white md:px-56 py-12 bg-[#f2f4f5]">
        <i class="fa fa-magnifying-glass pt-5 text-[#6b7280] p-4 bg-white"></i>
        <input type="search" name="query" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0 h-14 flex bg-white p-2 w-11/12">
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>

<div class="mt-5 w-screen bg-white rounded-lg">
    <ul class="m-5 p-5 grid grid-cols-3 md:gap-3 md:grid-cols-6">
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Motoryzacja') }}">
                    <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa-solid fa-car text-3xl bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Motoryzacja') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Motoryzacja</a>
            </div>
        </li>
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Dom-i-ogród') }}">
                    <div class="w-18 h-18 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa fa-house text-3xl bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Dom-i-ogród') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Dom i ogród</a>
            </div>
        </li>
        <li>
            <div class="flex justify-center">
                <a href="{{ url('/ads/Elektronika') }}">
                    <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                        <i class="fa fa-laptop text-3xl text-white bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                    </div>
                </a>
            </div>
            <div class="flex justify-center p-2">
                <a href="{{ url('/ads/Elektronika') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Elektronika</a>
            </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Moda') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-shirt text-3xl bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center p-2">
                    <a href="{{ url('/ads/Moda') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Moda</a>
                </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Sport-i-Hobby') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-bowling-ball text-3xl bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center p-2">
                    <a href="{{ url('/ads/Sport-i-Hobby') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Sport i Hobby</a>
                </div>
        </li>
        <li>
            <div>
                <div class="flex justify-center">
                    <a href="{{ url('/ads/Rowery') }}">
                        <div class="w-16 h-16 flex items-center justify-center bg-blue-500 rounded-full shadow-md transition-transform duration-300 hover:scale-110">
                            <i class="fa-solid fa-bicycle text-3xl bg-transparent text-white p-4 rounded-full transition-transform duration-300 hover:scale-110 w-18 h-18"></i>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center p-2">
                    <a href="{{ url('/ads/Rowery') }}" class="truncate hover:bg-black hover:text-white text-base font-semibold">Rowery</a>
                </div>
        </li>
    </ul>
</div>

<div class="bg-[#f2f4f5]">
    <span class="flex flex-col items-center text-[#002f34] text-4xl font-bold py-14">Najnowsze ogłoszenia</span>
    <ul class="m-5 px-5 pb-5 grid gap-4 grid-cols-1 md:grid-cols-4 text-black">
        @foreach($advertisements as $advertisement)
        <li class="w-auto">
            <div class="p-2 bg-white rounded-lg">
                <div>
                    <a href="{{ route('advertisements.show', $advertisement->id) }}" class="block p-2 bg-white rounded-lg">
                        @if ($advertisement->images->isNotEmpty())
                        <div class="flex items-center justify-center aspect-w-1 aspect-h1">
                            <img src="{{ asset('images/' . $advertisement->images->last()->url) }}" alt="ad-image" class="object-cover w-full h-56 bg-gray-200">
                        </div>
                        @else
                        <div class="flex items-center justify-center">
                            <img class="object-contain w-full h-56 bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}"></img>
                        </div>
                        @endif
                </div>
                <div class="flex justify-center p-2"><a href="{{ route('advertisements.show', $advertisement->id) }}" class="truncate hover:text-slate-400">{{ $advertisement->title }}</a></div>
                <div class="text-sm">{{ $advertisement->location->name }}</div>
                <div class="p2 text-lg">{{ $advertisement->price }} zł</div>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection