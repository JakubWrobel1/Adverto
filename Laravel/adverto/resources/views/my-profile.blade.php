@extends('layouts.app')
@section('content')

    <div class=" w-screen md:mt-10 justify-center items-center text-3xl font-semibold">
        <div class="bg-white md:ml-20 md:pr-0 md:pl-0 w-screen">
            <h1 class="text-[#037ab9]">Ustawienia</h1>
        </div>
    </div>
    <div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4">     
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center ">
            <a href="#"><button class="md:hover:text-black text-slate-500">Ogłoszenia</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <div class="underline underline-offset-4">Profil</div>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <a href="{{route('my-account.edit')}}"><button class="md:hover:text-black text-slate-500">Ustawienia</button></a>
        </div>
    </div>
    <div class="flex justify-center pt-5 md:p-6 bg-[#f2f4f5]">
        <div class="bg-white w-screen md:w-1/4 md:h-60 flex flex-col items-center  border-2  justify-center md:rounded-lg">
            <div class="p-2">
                <p>Imię: {{ $user->name }}</p>
            </div>
            <div class="p-2"><p>Nazwa użytkownika: {{ $user->username }}</p></div>
            <div class="p-2"><p>Email: {{ $user->email }}</p></div>
        </div>
    </div>

@endsection