@php
    $cat = explode('-', $key)[0];
    [$w, $h] = config("gallery.$cat.images.$key") ?? [640, 480];
@endphp
<img src="{{ asset(($full ?? false ? 'images/' : 'images/thumbs/').$key.'.jpg') }}" width="{{ $w }}" height="{{ $h }}" alt="{{ $alt ?? '' }}" loading="{{ $eager ?? false ? 'eager' : 'lazy' }}" decoding="async" class="{{ $class ?? 'h-full w-full object-cover' }}">
