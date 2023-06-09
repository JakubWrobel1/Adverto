@extends('layouts.app')

@section('content')
    <div class=" w-screen md:mt-10 justify-center items-center text-3xl font-semibold">
        <div class="bg-white md:ml-20 md:pr-0 md:pl-0 w-screen">
            <h1 class="text-[#037ab9]">Moje ogłoszenia</h1>
        </div>
    </div>
    <div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4">     
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center ">
        <button class="underline underline-offset-4 cursor-default">Moje ogłoszenia</button>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
        <a href="{{route('my-profile')}}"><button class="md:hover:text-black text-slate-500">Profil</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <a href="{{route('my-account.edit')}}"><button class="md:hover:text-black text-slate-500">Ustawienia</button></a>
        </div>
    </div>
    <div class="pt-4 mb-52 md:p-6 px-36 bg-[#f2f4f5]">
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 text-black">
            @forelse($advertisements as $advertisement)
                <li class="w-auto flex flex-row bg-white mx-36">
                    <a href="{{ route('advertisements.show', $advertisement->id) }}" class="block p-2 bg-white rounded-lg flex items-center">
                        @if ($advertisement->images->isNotEmpty())
                            <img class="h-full w-80" src="{{ asset('images/' . $advertisement->images->first()->url) }}" alt="ad-image">
                        @else
                            <img class="h-full w-60 bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}"></img>
                        @endif
                        <div class="ml-4 flex-grow">
                            <div class="text-xl font-medium"><a class="truncate hover:text-slate-400">{{ $advertisement->title }}</a></div>
                            <div class="text-sm"><i class="fa fa-location-dot px-2"></i>{{ $advertisement->location->name }}</div>
                        </div>
                        <div class="p-4 pr-6 text-right text-base font-bold">{{ $advertisement->price }} zł</div>
                    </a>
                </li>
                @empty
                <li class="w-auto flex flex-row mx-36">
                    <div class="p-2 rounded-lg flex items-center">
                        <div class="text-lg font-medium">Brak ogłoszeń</div>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection