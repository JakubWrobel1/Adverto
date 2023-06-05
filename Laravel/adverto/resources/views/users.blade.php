@foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}">Edytuj</a>
        </td>
    </tr>
@endforeach
<form action="{{ route('users.search') }}" method="GET">
    <input type="text" name="query" placeholder="Wyszukaj użytkownika">
    <button type="submit">Szukaj</button>
</form>