<!-- resources/views/advertisements/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Advertisement Details</h1>
        <div>
            <h2>{{ $advertisement->title }}</h2>
            <p>{{ $advertisement->description }}</p>
            <p>Price: {{ $advertisement->price }}</p>
        </div>
    </div>
    @if (Auth::user() && Auth::user()->is_admin)
    <form action="{{ route('advertisement.delete', $advertisement) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to ogłoszenie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="m-2 px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600 transition-colors duration-300">Usuń</button>
                    </form>
                                    @endif
                                    <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-primary">Edytuj</a>

@endsection