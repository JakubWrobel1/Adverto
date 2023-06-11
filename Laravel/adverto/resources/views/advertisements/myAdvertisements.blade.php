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
    @if($advertisements->isEmpty())
        <p class="text-center text-gray-500 text-xl">Brak wyników</p>
    @else

    @foreach($advertisements as $advertisement)
    <div class="p-2 md:p-0 bg-[#f2f4f5]">
        <li class="flex justify-center items-center  md:p-2">
            <div class="grid grid-cols-3 md:grid-cols-5 bg-white p-2 md:p-5 ">
            <a href="{{ route('advertisements.show', $advertisement->id) }}" class="">
                @if ($advertisement->images->isNotEmpty())
                    <img class="h-full w-60 col-span-1" src="{{ asset('images/' . $advertisement->images->first()->url) }}" alt="ad-image">
                @else
                    <img class="h-full w-60 bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}"></img>
                @endif
                <div class="ml-4 flex-grow md:w-96 text-ellipsis overflow-hidden md:col-span-3">
                    <div class="text-sm md:text-xl font-medium"><a href="{{ route('advertisements.show', $advertisement->id) }}"class="hover:text-slate-400 ">{{ $advertisement->title }}</a></div>
                    <div class="text-sm pb-2">{{ $advertisement->category->name }}</div>
                    <div class="text-sm col-span-1" ><i class="fa fa-location-dot px-2"></i>{{ $advertisement->location->city }}</div>
                </div>
                <div class="relative">
                    <div class="absolute top-0 right-0   md:pr-6 text-right text-base font-bold">
                        {{ $advertisement->price }} zł
                    </div>
                </div>
            </a>
    </div>
    </li>
</div>

    @endforeach
@endif
@endsection