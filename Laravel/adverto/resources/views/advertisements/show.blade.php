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
@endsection