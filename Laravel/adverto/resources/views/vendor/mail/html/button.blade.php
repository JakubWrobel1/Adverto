@props([
    'url',
    'color' => 'primary',
    'align' => 'center',
])
<table class="action" align="{{ $align }}" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="{{ $align }}">
<table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="{{ $align }}">
<table border="0" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td>
@php
    $trimmedSlot = trim($slot);
    $lowercaseSlot = strtolower($trimmedSlot);

    if ($lowercaseSlot === 'reset password') {
        $text = 'Zresetuj hasło';
    } elseif ($lowercaseSlot === 'verify email address') {
        $text = 'Zweryfikuj adres email';
    } else {
        $text = $slot;
    }
@endphp

<a href="{{ $url }}" class="button button-{{ $color }}" target="_blank" rel="noopener">{{ $text }}</a>


</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>