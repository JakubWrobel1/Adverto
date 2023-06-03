<!-- resources/views/advertisements/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Ogłoszenia w kategorii: {{ $category->name }}</h1>
    <div>
        <ul class="m-5 p-5 grid gap-4 grid-cols-1 md:grid-cols-4 text-black">
    @foreach($advertisements as $advertisement)
            <li class="w-auto">
                <div class="p-2 bg-white rounded-lg">
                    <div>
                        <img class="h-full w-full" src="{{ asset('img/images/icons/car.png') }}" alt="car">
                    </div>
                    <div class="flex justify-center p-2"><a class="truncate hover:text-slate-400">{{ $advertisement->title }}</a></div>
                    <div class="text-sm">{{ $advertisement->location->name }}</div>
                    <div class="p2 text-lg">{{ $advertisement->price }}</div>
                </div>
            </li>
    @endforeach
        </ul>
    </div>
@endsection


