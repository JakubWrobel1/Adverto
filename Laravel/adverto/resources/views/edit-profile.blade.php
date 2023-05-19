<h1>Edytuj profil</h1>
<form action="{{ route('my-account.save') }}" method="POST">
    @csrf
    
    <label for="name">Imię:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
    @error('name')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" name="username" value="{{ $user->username }}">
    @error('username')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    @error('email')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror
    @unless(!($user->password))
    <label for="old_password"> Stare Hasło:</label>
    <input type="password" name="old_password">
    @error('old_password')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror
    <label for="password">Hasło:</label>
    <input type="password" name="password">
    @error('password')
        <div class="alert alert-danger">{{$message }}</div>
    @enderror
    @endunless
    <button type="submit">Zapisz zmiany</button>
</form>
@unless($user->password)
<a href="{{ route('set-password-form')}}"><button>Ustaw hasło dla swojego konta</button></a>
@endunless

<a href="{{ url('/my-account')}}"><button>poprzednia strona</button></a>