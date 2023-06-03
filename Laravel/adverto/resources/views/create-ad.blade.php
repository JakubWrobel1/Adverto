
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Add Advertisement</h1>

        <form action="/advertisements" method="POST" class="max-w-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block font-bold mb-2">Title:</label>
                <input type="text" name="title" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-bold mb-2">Description:</label>
                <textarea name="description" rows="5" class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-bold mb-2">Price:</label>
                <input type="text" name="price" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="category_id" class="block font-bold mb-2">Category:</label>
                <select name="category_id" class="w-full border border-gray-300 rounded px-4 py-2">
                    <option value="1">Motoryzacja</option>
                    <option value="2">Dom i Ogród</option>
                    <option value="3">Elektronika</option>
                    <option value="4">Moda</option>
                    <option value="5">Sport i Hobby</option>
                    <option value="6">Rowery</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="location_id" class="block font-bold mb-2">Location:</label>
                <input type="number" name="location_id" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add Advertisement
            </button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection