<!-- resources/views/advertisements/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Ogłoszenia w kategorii: {{ $category->name }}</h1>

    @foreach($advertisements as $advertisement)
        <h2>{{ $advertisement->title }}</h2>
        <p>{{ $advertisement->description }}</p>
    @endforeach
@endsection