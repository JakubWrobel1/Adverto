var autocomplete;

function initializeAutocomplete(id) {
    var element = document.getElementById(id);
    if (element) {
        autocomplete = new google.maps.places.Autocomplete(element, {
            types: ['(cities)'],
            componentRestrictions: { country: 'pl' } // Filtrowanie tylko dla Polski
        });
        autocomplete.addListener('place_changed', onPlaceChanged);
    }
}

function onPlaceChanged() {
    var place = autocomplete.getPlace();

    // Sprawdź, czy miejsce zostało wybrane
    if (!place.geometry) {
        // Wyświetl błąd lub wykonaj odpowiednie działania
        console.log('Błędne miejsce');
        // Przykład: Zmień klasę pola na 'border-red-500' w celu oznaczenia błędnego pola
        document.getElementById('user_autocomplete_address').classList.add('border-red-500');
        // Przykład: Wyświetl komunikat błędu
        document.getElementById('locationError').innerText = 'Wybierz prawidłową lokalizację.';
        return;
    }

    // Jeśli miejsce zostało wybrane poprawnie, usuń ewentualne oznaczenia błędu
    document.getElementById('user_autocomplete_address').classList.remove('border-red-500');
    document.getElementById('locationError').innerText = '';

    for (var i in place.address_components) {
        var component = place.address_components[i];
        for (var j in component.types) {  // Some types are ["country", "political"]
            var type_element = document.getElementById(component.types[j]);
            if (type_element) {
                type_element.value = component.long_name;
            }
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    initializeAutocomplete('user_autocomplete_address');
});

document.getElementById('advertisementForm').addEventListener('submit', function(event) {
    var place = document.getElementById('user_autocomplete_address').value;

    // Sprawdź, czy miejsce zostało wybrane przed wysłaniem formularza
    if (place === '') {
        // Wyświetl błąd lub wykonaj odpowiednie działania
        console.log('Nie wybrano miejsca');
        // Przykład: Zmień klasę pola na 'border-red-500' w celu oznaczenia błędnego pola
        document.getElementById('user_autocomplete_address').classList.add('border-red-500');
        // Przykład: Wyświetl komunikat błędu
        document.getElementById('locationError').innerText = 'Wybierz lokalizację.';
        event.preventDefault(); // Zatrzymaj wysyłanie formularza
    }
});