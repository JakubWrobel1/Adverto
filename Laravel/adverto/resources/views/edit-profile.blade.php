@extends('layouts.app')
@section('title', 'Ustawienia - Adverto')
@section('content')
<div class=" w-screen md:mt-10 justify-center items-center text-3xl font-semibold">
        <div class="bg-white md:ml-20 md:pr-0 md:pl-0 w-screen">
            <h1 class="text-[#037ab9]">Ustawienia</h1>
        </div>
    </div>
    <div class=" w-screen md:mt-10 flex flex-col md:flex-row justify-center items-center text-lg md:space-x-1/4">     
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center ">
            <a href="{{ route('advertisements.myAdvertisements') }}"><button class="md:hover:text-black text-slate-500">Moje ogłoszenia</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <a  href="{{route('my-profile')}}"><button class="md:hover:text-black text-slate-500">Profil</button></a>
        </div>
        <div class="bg-white md:m-0 md:pr-0 md:pl-0 mb-1 p-3 w-screen flex items-center justify-center">
            <div class="underline underline-offset-4 cursor-default">Ustawienia</div>
        </div>
    </div>
    <div class="flex justify-center pt-5 md:p-6 bg-[#f2f4f5]">
        <div class=" md:focus:ring-0 md:w-auto w-screen bg-white md:rounded-lg flex-col items-center p-10 border-2 ">
            <form class="p-2" action="{{ route('my-account.save') }}" method="POST">
                @csrf
                <div class="pt-3 pb-3">
                    <label class="" for="name">Imię:</label>
                    <div>
                        <input class="" type="text" name="name" value="{{ $user->name }}" required>
                    </div>
                    @error('name')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
        
                </div>
                <div class="pt-3 pb-3">
                    <label class="" for="email">E-mail:</label>
                    <div><input class="" type="email" name="email" value="{{ $user->email }}" required></div>
                    @error('email')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                    
                </div>
                <div class="pt-3 pb-3">
                    <label for="phone_number" class="">Numer telefonu</label>
                    <div><input class="" type="tel" name="phone_number" value="{{ $user->phone_number}}" pattern="[0-9]{3}[-\s]?[0-9]{3}[-\s]?[0-9]{3}" required /></div>
                        @error('phone_number')
                            <div class="flex flex-col w-full text-red-600">{{ $message }}</div>
                        @enderror  
                </div>
                <div class="pt-3 pb-3">
                    @unless(!($user->password))
                    <label class="" for="old_password"> Stare Hasło:</label>
                    <div><input class="" type="password" name="old_password"></div>              
                    @error('old_password')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                </div>
                <div class="pt-3 pb-3 mb-10">
                    <label class="" for="password">Nowe hasło:</label>
                    <div><input class="" type="password" name="password"></div>
                    @error('password')
                        <div class="flex flex-col w-full text-red-600">{{$message }}</div>
                    @enderror
                    </div>
                @endunless
                <button class="hover:bg-blue-500 bg-[#037ab9] w-full text-white rounded-full text-lg h-10 transition duration-700 transform hover:scale-95" type="submit">Zapisz zmiany</button>
                </div>
            </form>
            <div>
                @unless($user->password)
                <a class="mt-4 pr-2 pl-2 bg-blue-500 rounded-full text-xl text-white flex justify-center h-10 text-white  hover:bg-cyan-400 transition duration-700 transform hover:scale-95" href="{{ route('set-password-form')}}"><button>Ustaw hasło dla swojego konta</button></a>
                @endunless
                </div>
            </div>
        </div>
    </div>
@endsection