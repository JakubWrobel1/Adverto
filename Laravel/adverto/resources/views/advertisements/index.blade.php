<!-- resources/views/advertisements/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="pt-5 pl-10 text-xl font-semibold text-[#3d3d3b]">Ogłoszenia w kategorii: {{ $category->name }}</h1>
    <div class="px-36">
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 text-black">
            @foreach($advertisements as $advertisement)
                <li class="w-auto border border-[#dcdde0]">
                    <a href="{{ route('advertisements.show', $advertisement->id) }}" class="block p-2 bg-white rounded-lg flex items-center">
                        <img class="h-full w-60" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                        <div class="ml-4 flex-grow">
                            <div class="text-xl font-medium"><a class="truncate hover:text-slate-400">{{ $advertisement->title }}</a></div>
                            <div class="text-sm">{{ $advertisement->location->name }}</div>
                        </div>
                        <div class="p-2 text-lg text-right">{{ $advertisement->price }}</div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection