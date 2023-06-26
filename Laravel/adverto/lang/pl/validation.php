<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'accepted_if' => 'Pole :attribute musi zostać zaakceptowane, gdy :other jest :value.',
    'active_url' => 'Pole :attribute musi być prawidłowym adresem URL.',
    'after' => 'Pole :attribute musi być datą po :date.',
    'after_or_equal' => 'Pole :attribute musi być datą po lub równą :date.',
    'alpha' => 'Pole :attribute może zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => 'Pole :attribute może zawierać tylko litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'ascii' => 'Pole :attribute może zawierać tylko jednobajtowe znaki alfanumeryczne i symbole.',
    'before' => 'Pole :attribute musi być datą przed :date.',
    'before_or_equal' => 'Pole :attribute musi być datą przed lub równą :date.',
    'between' => [
        'array' => 'Pole :attribute musi mieć od :min do :max elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar od :min do :max kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć wartość od :min do :max.',
        'string' => 'Pole :attribute musi mieć od :min do :max znaków.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość true lub false.',
    'confirmed' => 'Potwierdzenie pola :attribute nie zgadza się.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date' => 'Pole :attribute musi być prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute musi być w formacie :format.',
    'decimal' => 'Pole :attribute musi mieć :decimal miejsc dziesiętnych.',
    'declined' => 'Pole :attribute musi być odrzucone.',
    'declined_if' => 'Pole :attribute musi być odrzucone, gdy :other jest :value.',
    'different' => 'Pole :attribute i :other muszą być różne.',
    'digits' => 'Pole :attribute musi mieć :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'doesnt_end_with' => 'Pole :attribute nie może koń
czyć się jednym z: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się jednym z: :values.',
    'email' => 'Pole :attribute musi być prawidłowym adresem email.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z: :values.',
    'enum' => 'Wybrana wartość :attribute jest nieprawidłowa.',
    'exists' => 'Wybrana wartość :attribute jest nieprawidłowa.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar większy niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi mieć więcej niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi mieć :value elementów lub więcej.',
        'file' => 'Pole :attribute musi mieć rozmiar większy lub równy :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string' => 'Pole :attribute musi mieć więcej lub równo :value znaków.',
    ],
    'image' => 'Pole :attribute musi być obrazem.',
    'in' => 'Wybrana wartość :attribute jest nieprawidłowa.',
    'in_array' => 'Pole :attribute musi istnieć w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json' => 'Pole :attribute musi być prawidłowym ciągiem JSON.',
    'lowercase' => 'Pole :attribute musi być pisane małymi literami.',
    'lt' => [
        'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar mniejszy niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi mieć mniej niż :value znaków.',
    ],
    'lte' => [
        'array' => 'Pole :attribute musi mieć nie więcej niż :value elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar mniejszy lub równy :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string' => 'Pole :attribute musi mieć mniej lub

równo :value znaków.',
    ],
    'mac_address' => 'Pole :attribute musi być prawidłowym adresem MAC.',
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    ],
    'max_digits' => 'Pole :attribute nie może mieć więcej niż :max cyfr.',
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
    'min' => [
        'array' => 'Pole :attribute musi mieć co najmniej :min elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar co najmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być co najmniej :min.',
        'string' => 'Pole :attribute musi mieć co najmniej :min znaków.',
    ],
    'min_digits' => 'Pole :attribute musi mieć co najmniej :min cyfr.',
    'missing' => 'Pole :attribute musi być puste.',
    'missing_if' => 'Pole :attribute musi być puste, gdy :other to :value.',
    'missing_unless' => 'Pole :attribute musi być puste, jeśli :other nie jest :value.',
    'missing_with' => 'Pole :attribute musi być puste, gdy :values jest obecne.',
    'missing_with_all' => 'Pole :attribute musi być puste, gdy :values są obecne.',
    'multiple_of' => 'Pole :attribute musi być wielokrotnością :value.',
    'not_in' => 'Wybrana wartość :attribute jest nieprawidłowa.',
    'not_regex' => 'Format pola :attribute jest nieprawidłowy.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'password' => [
        'letters' => 'Pole :attribute musi zawierać co najmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawierać co najmniej jedną dużą literę i jedną małą literę.',
        'numbers' => 'Pole :attribute musi zawierać co najmniej jedną liczbę.',
        'symbols' => 'Pole :attribute musi zawierać co najmniej jeden symbol.',
        'uncompromised' => 'Podana wartość :attribute pojawiła się w przecieku danych. Wybierz inną wartość :attribute.',
    ],
    'present' => 'Pole :attribute musi być obecne.',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other to :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
    'prohib

its' => 'Pole :attribute zabrania :other.',
    'regex' => 'Format pola :attribute jest nieprawidłowy.',
    'relatable' => 'To pole :attribute może nie być powiązane z tym zasobem.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane, gdy :other to :value.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane, gdy :values jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane, gdy :values są obecne.',
    'required_without' => 'Pole :attribute jest wymagane, gdy :values nie jest obecne.',
    'required_without_all' => 'Pole :attribute jest wymagane, gdy żadne z :values nie jest obecne.',
    'same' => 'Pole :attribute i :other muszą być takie same.',
    'size' => [
        'array' => 'Pole :attribute musi zawierać :size elementów.',
        'file' => 'Pole :attribute musi mieć rozmiar :size kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć wartość :size.',
        'string' => 'Pole :attribute musi mieć :size znaków.',
    ],
    'starts_with' => 'Pole :attribute musi zaczynać się jednym z: :values.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
    'unique' => 'Pole :attribute już istnieje.',
    'uploaded' => 'Nie udało się przesłać pola :attribute.',
    'url' => 'Format pola :attribute jest nieprawidłowy.',
    'uppercase' => 'Pole :attribute musi być pisane dużymi literami.',
    'uuid' => 'Pole :attribute musi być prawidłowym identyfikatorem UUID.',
    /*
|--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Here you may specify custom validation messages for attributes using the
| convention "attribute.rule" to name the lines. This makes it quick to
| specify a specific custom language line for a given attribute rule.
|
*/

    'custom' => [
        'password' => [
            'size' => 'Pole hasło musi mieć :size znaków.',
        ],
    ],

    /*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| The following language lines are used to swap our attribute placeholder
| with something more reader friendly such as "E-Mail Address" instead
| of "email". This simply helps us make our message more expressive.
|
*/

    'attributes' => [],
];
