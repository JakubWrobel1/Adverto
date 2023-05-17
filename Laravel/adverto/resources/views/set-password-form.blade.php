<form method="POST" action="{{ route('set-password') }}">
    @csrf

    <div class="form-group">
        <label for="password">Nowe hasło</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div class="form-group">
        <label for="password_confirmation">Potwierdź hasło</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Zapisz hasło</button>
</form>
