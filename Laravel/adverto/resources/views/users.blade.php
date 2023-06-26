@extends('layouts.app')
@section('title', 'Użytkownicy')
@section('content')
<form action="{{ route('users.search') }}" method="GET">
    <div class="flex border-2 border-white md:px-56 py-12 bg-[#f2f4f5]">
        <i class="fa fa-magnifying-glass pt-5 text-[#6b7280] p-4 bg-white"></i>
        <input class="w-screen border-none focus:outline-none focus:ring-0 h-14 flex bg-white p-2 w-11/12" type="text" name="query" placeholder="Wyszukaj użytkownika">
        <button type="submit" class="pr-5 bg-white">
            <i class="fa fa-search bg-white text-xl"></i>
        </button>
    </div>
</form>
@endsection