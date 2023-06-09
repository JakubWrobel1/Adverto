<form action="{{ route('advertisements.update', $advertisement->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Pola formularza do edycji ogłoszenia -->
    <div>
        <label for="title">Tytuł</label>
        <input type="text" name="title" value="{{ $advertisement->title }}" required>
    </div>

    <div>
        <label for="description">Opis</label>
        <textarea name="description" required>{{ $advertisement->description }}</textarea>
    </div>

    <!-- Pozostałe pola formularza -->

    <button type="submit">Zapisz zmiany</button>
</form>
