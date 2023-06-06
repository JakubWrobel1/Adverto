@extends('layouts.app')
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
@if($users->isEmpty())
    <p class="text-center text-gray-500 text-xl">Brak wyników</p>
@else
    <table class=" table-auto md:table-fixed w-screen">
        <thead>
            <tr>
                <th class="w-12 pb-2 pt-2">ID</th>
                <th class="pb-2 pt-2">Imię</th>
                <th class="pb-2 pt-2">Nazwa użytkownika</th>
                <th class="pb-2 pt-2">Email</th>
                <th class="pb-2 pt-2">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border border-gray-300 p-2 text-center">{{ $user->id }}</td>
                    <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $user->username }}</td>
                    <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                    <td class="p-2 flex justify-center">
                        <a href="{{ route('users.edit', $user->id) }}" class="ml-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition-colors duration-300">Edytuj</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection