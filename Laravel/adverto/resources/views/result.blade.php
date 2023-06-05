@extends('layouts.app')
@section('content')
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