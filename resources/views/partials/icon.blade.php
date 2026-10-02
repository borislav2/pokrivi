@php($c = 'h-full w-full')
<svg class="{{ $class ?? $c }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('tiles')
            <path d="M3 11l9-7 9 7"/><path d="M5 10v9h14v-9"/><path d="M8 14h3M13 14h3M10 17h4"/>
            @break
        @case('canopy')
            <path d="M2 9l10-5 10 5"/><path d="M5 10v10M19 10v10M12 9.5V20"/><path d="M3 20h18"/>
            @break
        @case('frame')
            <path d="M3 20L12 5l9 15"/><path d="M7.5 12.5h9"/><path d="M12 5v15"/><path d="M3 20h18"/>
            @break
        @case('shield')
            <path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6z"/><path d="M12 8c-1.5 2-2.2 3-2.2 4.2a2.2 2.2 0 004.4 0C14.2 11 13.5 10 12 8z"/>
            @break
        @case('metal')
            <path d="M3 8l9-4 9 4v3H3z"/><path d="M5 11v8M9 11v8M13 11v8M17 11v8M21 11v8"/><path d="M3 19h18"/>
            @break
        @case('pergola')
            <path d="M3 8h18"/><path d="M5 8v12M19 8v12"/><path d="M7 5l1 3M11 5l.5 3M15 5l-.5 3M19 5l-1 3"/><path d="M3 20h18"/>
            @break
        @case('gutter')
            <path d="M3 7h15a2 2 0 012 2v0"/><path d="M3 7v3h17V9"/><path d="M19 12v6"/><path d="M17 19c0 1.2.9 2 2 2s2-.8 2-2c0-1-2-3-2-3s-2 2-2 3z"/>
            @break
        @case('phone')
            <path d="M5 4h3.3l1.6 4.2-2 1.3a11 11 0 006.6 6.6l1.3-2L20 15.7V19a2 2 0 01-2 2A15 15 0 013 6a2 2 0 012-2z"/>
            @break
        @case('mail')
            <rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>
            @break
        @case('pin')
            <path d="M12 21s7-6 7-11a7 7 0 10-14 0c0 5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/>
            @break
        @case('check')
            <path d="M5 12.5l4.5 4.5L19 7.5"/>
            @break
        @case('arrow')
            <path d="M5 12h14M13 6l6 6-6 6"/>
            @break
        @case('clock')
            <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>
            @break
        @case('award')
            <circle cx="12" cy="9" r="6"/><path d="M8.5 14L7 21l5-3 5 3-1.5-7"/>
            @break
        @case('coins')
            <ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6"/><path d="M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"/>
            @break
        @case('chat')
            <path d="M4 5h16v11H9l-5 4z"/>
            @break
        @case('close')
            <path d="M6 6l12 12M18 6L6 18"/>
            @break
        @case('prev')
            <path d="M15 5l-7 7 7 7"/>
            @break
        @case('next')
            <path d="M9 5l7 7-7 7"/>
            @break
    @endswitch
</svg>
