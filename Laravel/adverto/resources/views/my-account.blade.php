<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Wyloguj</button>
</form>
<h1>Mój profil</h1>
<p>Imię: {{ $user->name }}</p>
<p>Nazwa użytkownika: {{ $user->username }}</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ route('my-account.edit') }}">Edytuj dane</a>
<a href="{{ url('welcome')}}"><button>Powrót do strony głównej</button></a>
