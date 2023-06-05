<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Imię:</label>
    <input type="text" name="name" value="{{ $user->name }}">

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}">

    <button type="submit">Zapisz</button>
</form>