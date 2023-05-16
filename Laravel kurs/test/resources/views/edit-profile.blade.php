<h1>Edytuj profil</h1>
<form action="{{ route('my-account.save') }}" method="POST">
    @csrf
    <label for="name">Imię:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" name="username" value="{{ $user->username }}">
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <label for="old_password"> Stare Hasło:</label>
    <input type="password" name="old_password">
    <label for="password">Hasło:</label>
    <input type="password" name="password">
    <button type="submit">Zapisz zmiany</button>
</form>