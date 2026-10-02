<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="@yield('meta_description', 'Професионални покривни услуги в Бургас – смяна на керемиди, метални покриви, хидроизолация, веранди, навеси и улуци. Безплатна консултация и оферта.')">
        <meta name="theme-color" content="#c4501d">
        <meta property="og:title" content="@yield('title', 'Покривни услуги Бургас')">
        <meta property="og:description" content="@yield('meta_description', 'Професионални покривни услуги в Бургас – смяна на керемиди, метални покриви, хидроизолация, веранди, навеси и улуци.')">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:site_name" content="{{ config('site.name') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('og_image', asset('images/hero.jpg'))">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>@yield('title', 'Покривни услуги Бургас')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                @import 'tailwindcss';
            </style>
        @endif

        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'RoofingContractor',
                'name' => config('site.name'),
                'url' => url('/'),
                'image' => asset('images/hero.jpg'),
                'telephone' => config('site.phone_href'),
                'email' => config('site.email'),
                'areaServed' => config('site.city'),
                'address' => ['@type' => 'PostalAddress', 'addressLocality' => config('site.city'), 'addressCountry' => 'BG'],
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
        </script>
        @stack('head')
    </head>
    <body class="pb-16 md:pb-0">
        @php
            $nav = [
                ['Услуги', route('services'), request()->routeIs('services', 'service')],
                ['Галерия', route('gallery'), request()->routeIs('gallery')],
                ['За нас', route('about'), request()->routeIs('about')],
                ['Контакти', route('contact'), request()->routeIs('contact')],
            ];
        @endphp

        <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:rounded-lg focus:bg-white focus:px-4 focus:py-2">Към съдържанието</a>

        <header class="sticky top-0 z-50 border-b border-sand bg-cream/95 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="{{ config('site.name') }} – начало">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand text-white">
                        @include('partials.icon', ['name' => 'tiles', 'class' => 'h-6 w-6'])
                    </span>
                    <span class="leading-tight">
                        <span class="block text-lg font-extrabold tracking-tight">{{ config('site.name') }}</span>
                        <span class="block text-[11px] font-bold uppercase tracking-[0.2em] text-ink-soft">{{ config('site.city') }}</span>
                    </span>
                </a>

                <nav class="hidden items-center gap-1 md:flex" aria-label="Основна навигация">
                    @foreach ($nav as [$label, $href, $active])
                        <a href="{{ $href }}" @if ($active) aria-current="page" @endif
                           class="rounded-lg px-4 py-2 text-sm font-bold transition hover:bg-sand {{ $active ? 'text-brand' : 'text-ink' }}">{{ $label }}</a>
                    @endforeach
                    <a href="tel:{{ config('site.phone_href') }}" class="btn btn-brand ml-3 !py-2.5 text-sm">
                        @include('partials.icon', ['name' => 'phone', 'class' => 'h-4 w-4'])
                        {{ config('site.phone') }}
                    </a>
                </nav>

                <button id="menu-btn" type="button" class="rounded-lg border border-sand bg-white p-2.5 md:hidden" aria-label="Отвори менюто" aria-expanded="false" aria-controls="mobile-menu">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden border-t border-sand bg-cream md:hidden">
                <nav class="mx-auto flex max-w-7xl flex-col px-4 py-3" aria-label="Мобилна навигация">
                    @foreach ($nav as [$label, $href, $active])
                        <a href="{{ $href }}" class="border-b border-sand/70 py-3.5 text-base font-bold {{ $active ? 'text-brand' : 'text-ink' }}">{{ $label }}</a>
                    @endforeach
                </nav>
            </div>
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer class="bg-ink text-stone-300">
            <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-[1.4fr_1fr_1fr] lg:px-8">
                <div>
                    <div class="mb-5 flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand text-white">
                            @include('partials.icon', ['name' => 'tiles', 'class' => 'h-6 w-6'])
                        </span>
                        <span class="text-xl font-extrabold text-white">{{ config('site.name') }}</span>
                    </div>
                    <p class="max-w-md leading-relaxed text-stone-400">Професионални покривни услуги с гарантирано качество и достъпни цени в Бургас и региона. Безплатна консултация и оферта.</p>
                    <a href="{{ route('contact') }}" class="btn btn-brand mt-6">Заявете оферта</a>
                </div>

                <div>
                    <h2 class="mb-5 text-sm font-extrabold uppercase tracking-[0.18em] text-white">Услуги</h2>
                    <ul class="space-y-3">
                        @foreach (config('site.services') as $slug => $s)
                            <li><a href="{{ route('service', $slug) }}" class="transition hover:text-white">{{ $s['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h2 class="mb-5 text-sm font-extrabold uppercase tracking-[0.18em] text-white">Контакти</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            @include('partials.icon', ['name' => 'phone', 'class' => 'h-5 w-5 shrink-0 text-brand'])
                            <a href="tel:{{ config('site.phone_href') }}" class="transition hover:text-white">{{ config('site.phone') }}</a>
                        </li>
                        <li class="flex items-center gap-3">
                            @include('partials.icon', ['name' => 'mail', 'class' => 'h-5 w-5 shrink-0 text-brand'])
                            <a href="mailto:{{ config('site.email') }}" class="break-all transition hover:text-white">{{ config('site.email') }}</a>
                        </li>
                        <li class="flex items-center gap-3">
                            @include('partials.icon', ['name' => 'pin', 'class' => 'h-5 w-5 shrink-0 text-brand'])
                            <span>{{ config('site.city') }}, България</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 py-6 text-center text-sm text-stone-500">© {{ date('Y') }} {{ config('site.name') }}. Всички права запазени.</div>
        </footer>

        <div class="fixed inset-x-0 bottom-0 z-40 grid grid-cols-2 gap-2 border-t border-sand bg-cream/95 p-2 backdrop-blur md:hidden">
            <a href="tel:{{ config('site.phone_href') }}" class="btn btn-brand !py-3">
                @include('partials.icon', ['name' => 'phone', 'class' => 'h-5 w-5'])
                Обади се
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline !py-3">Запитване</a>
        </div>

        <dialog id="lightbox" class="lightbox" aria-label="Преглед на снимка">
            <div id="lightbox-stage" class="relative flex h-full w-full items-center justify-center p-4 sm:p-10">
                <img id="lightbox-img" alt="" class="max-h-full max-w-full rounded-lg object-contain">
                <button type="button" data-lb="close" class="absolute right-3 top-3 rounded-full bg-white/10 p-3 text-white transition hover:bg-white/25" aria-label="Затвори">
                    @include('partials.icon', ['name' => 'close', 'class' => 'h-6 w-6'])
                </button>
                <button type="button" data-lb="prev" class="absolute left-2 top-1/2 -translate-y-1/2 rounded-full bg-white/10 p-3 text-white transition hover:bg-white/25 sm:left-5" aria-label="Предишна снимка">
                    @include('partials.icon', ['name' => 'prev', 'class' => 'h-6 w-6'])
                </button>
                <button type="button" data-lb="next" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full bg-white/10 p-3 text-white transition hover:bg-white/25 sm:right-5" aria-label="Следваща снимка">
                    @include('partials.icon', ['name' => 'next', 'class' => 'h-6 w-6'])
                </button>
                <p id="lightbox-count" class="absolute bottom-4 left-1/2 -translate-x-1/2 rounded-full bg-black/40 px-3 py-1 text-sm font-bold text-white"></p>
            </div>
        </dialog>

        <script>
            (function () {
                var btn = document.getElementById('menu-btn');
                var menu = document.getElementById('mobile-menu');
                if (btn && menu) {
                    btn.addEventListener('click', function () {
                        var hidden = menu.classList.toggle('hidden');
                        btn.setAttribute('aria-expanded', String(!hidden));
                    });
                }

                var dlg = document.getElementById('lightbox');
                if (!dlg || typeof dlg.showModal !== 'function') return;
                var img = document.getElementById('lightbox-img');
                var count = document.getElementById('lightbox-count');
                var items = [], idx = 0;

                function show(i) {
                    idx = (i + items.length) % items.length;
                    img.src = items[idx].href;
                    img.alt = items[idx].getAttribute('data-alt') || '';
                    count.textContent = (idx + 1) + ' / ' + items.length;
                }

                document.addEventListener('click', function (e) {
                    var a = e.target.closest('a[data-lightbox]');
                    if (a) {
                        e.preventDefault();
                        var group = a.getAttribute('data-lightbox');
                        items = Array.prototype.filter.call(
                            document.querySelectorAll('a[data-lightbox="' + group + '"]'),
                            function (el) { return !el.closest('[hidden]'); }
                        );
                        show(items.indexOf(a));
                        dlg.showModal();
                        return;
                    }
                    var control = e.target.closest('[data-lb]');
                    if (control && dlg.contains(control)) {
                        var action = control.getAttribute('data-lb');
                        if (action === 'close') dlg.close();
                        if (action === 'prev') show(idx - 1);
                        if (action === 'next') show(idx + 1);
                    } else if (e.target === dlg || e.target.id === 'lightbox-stage') {
                        dlg.close();
                    }
                });

                dlg.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowLeft') show(idx - 1);
                    if (e.key === 'ArrowRight') show(idx + 1);
                });
                dlg.addEventListener('close', function () { img.removeAttribute('src'); });
            })();
        </script>
        @stack('scripts')
    </body>
</html>
