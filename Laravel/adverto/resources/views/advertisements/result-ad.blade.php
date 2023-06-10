@extends('layouts.app')

@section('content')<form action="{{route('advertisements.advertisementSearch')}}" method="GET" class="search-form">
    <div class="flex border-2 border-white md:px-56 py-12 bg-[#f2f4f5]">
        <i class="fa fa-magnifying-glass pt-5 text-[#6b7280] p-4 bg-white"></i>
        <input type="search" name="query" placeholder="Wyszukaj..." class="w-screen border-none focus:outline-none focus:ring-0 h-14 flex bg-white p-2 w-11/12">                   
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>
@if($advertisements->isEmpty())
    <p class="text-center text-gray-500 text-xl">Brak wyników</p>
@else
    @foreach($advertisements as $advertisement)
    <div class="p-2">
    <li class="w-auto flex flex-row bg-white md:mx-36">
        <a href="{{ route('advertisements.show', $advertisement->id) }}" class="block  bg-white rounded-lg flex items-center">
            @if ($advertisement->images->isNotEmpty())
                <img class="h-full w-60 " src="{{ asset('images/' . $advertisement->images->first()->url) }}" alt="ad-image">
            @else
                <img class="h-full w-60 bg-gray-200" src="{{ asset('img/images/icons/no-image.png') }}"></img>
            @endif
            <div class="ml-4 flex-grow">
                <div class="text-sm md:text-xl font-medium"><a href="{{ route('advertisements.show', $advertisement->id) }}"class="hover:text-slate-400">{{ $advertisement->title }}</a></div>
                <div class="text-sm"><i class="fa fa-location-dot px-2"></i>{{ $advertisement->location->name }}</div>
            </div>
            <div class="p-4 md:pr-6 text-right text-base font-bold w-1/3">{{ $advertisement->price }} zł</div>
        </a>
    </li>
</div>

    @endforeach
@endif
@endsection