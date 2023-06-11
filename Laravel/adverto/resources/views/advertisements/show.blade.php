@extends('layouts.app')

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
    <div class="flex flex-col items-center">
        <div class="flex justify-center w-screen">
            <div class="flex flex-col justify-center items-center relative m-20 w-full">
                    <div class="  max-w-lg h-full">
                        @if ($advertisement->images->isNotEmpty())
                            <img class="w-full h-full" src="{{ asset('images/' . $advertisement->images->first()->url) }}" alt="ad-image">
                        @else
                            <img class="bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}"></img>
                        @endif
                    </div>
                <div class= "m-5 w-full p-5">
                    <div class="pb-5">
                        <h2 class="text-lg md:text-4xl">{{ $advertisement->title }}</h2>
                    </div>
                    <div class="pb-10">
                        <p class="text-4xl font-bold">{{ $advertisement->price }} zł</p>
                    </div>
                    <div>
                        <p class="pb-5 font-bold">Opis:</p>
                        <p class="whitespace-pre-line"">{{ $advertisement->description }}</p>
                    </div>
                </div>
            </div>
                <div class="flex flex-col mt-20 w-full">
                    <h1>Imię: {{$user->name}}</h1>
                    <h2>Email: {{$user->email}}</h2>
                    <p>Telefon: {{$user->phone_number}}</p>
                </div>   
        </div>
    </div>
    @auth
        @if ($advertisement->user_id === auth()->user()->id || Auth::user()->is_admin)
            <form action="{{ route('advertisement.delete', $advertisement) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to ogłoszenie?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="m-2 px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600 transition-colors duration-300">Usuń</button>
            </form>
            <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-primary">Edytuj</a>
        @endif
    @endauth

@endsection
