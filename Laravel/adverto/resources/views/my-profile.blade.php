@extends('layouts.app')
@section('title', 'Witaj - '.$user->name)
@section('content')

<div class=" w-screen md:mt-10 justify-center items-center text-3xl font-semibold">
    <div class="bg-white md:ml-20 md:pr-0 md:pl-0 w-screen">
        <h1 class="text-[#037ab9]">Profil</h1>
    </div>
</div>
<div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4">
    <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center ">
        <a href="{{ route('advertisements.myAdvertisements') }}"><button class="md:hover:text-black text-slate-500">Moje ogłoszenia</button></a>
    </div>
    <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
        <div class="underline underline-offset-4 cursor-default">Profil</div>
    </div>
    <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
        <a href="{{route('my-account.edit')}}"><button class="md:hover:text-black text-slate-500">Ustawienia</button></a>
    </div>
</div>
<div class="mb-2 bg-[#f2f4f5]">
    <div class="flex items-center justify-end py-6 md:w-1/2 pr-14">
        <img src="{{url('/img/images/icons/avatar.png')}}" alt="avatar" class="h-32 w-32 mx-4">
        <h1 class="text-2xl font-semibold mx-4">Edytuj swój profil</h1>
    </div>
    <div class="flex justify-center mb-32">
        <div class="bg-white w-screen md:w-1/2 h-80 flex flex-col pt-10 pl-8">
            <div class="text-sm font-bold text-slate-500 p-2">PODSTAWOWE INFORMACJE</div>
            <div class="p-2">
                <p class="text-[11px] text-[#7f9799]">Nazwa</p>
                <p>{{ $user->name }}</p>
            </div>
            <div class="p-2">
                <p class="text-[11px] text-[#7f9799]">Login</p>
                <p>{{ $user->username }}</p>
            </div>
            <div class="p-2 flex flex-col">
                <p class="text-[11px] text-[#7f9799]">E-mail</p>
                <p>{{ $user->email }}</p>
            </div>
            <div class="p-2">
                <p class="text-[11px] text-[#7f9799]">Numer telefonu</p>
                <p>{{ $user->phone_number }}</p>
            </div>
        </div>
    </div>
</div>

@endsection