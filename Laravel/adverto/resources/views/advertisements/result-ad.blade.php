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
    @endforeach
@endif
@endsection