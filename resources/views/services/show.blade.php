@extends('layouts.site')

@section('title', $service['title'] . ' | Покривни услуги в Бургас')
@section('meta_description', $service['short_description'])
@section('og_image', asset('images/'.$service['cover'].'.jpg'))

@php($photos = array_keys(config('gallery.'.$service['gallery'].'.images')))

@section('content')
    <section class="px-4 pb-16 pt-8 sm:px-6 md:pt-12 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <nav class="mb-8 flex flex-wrap items-center gap-2 text-sm font-bold text-ink-soft" aria-label="Пътека">
                <a href="{{ route('home') }}" class="hover:text-brand">Начало</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('services') }}" class="hover:text-brand">Услуги</a>
                <span aria-hidden="true">/</span>
                <span class="text-ink">{{ $service['title'] }}</span>
            </nav>

            <div class="grid items-center gap-10 lg:grid-cols-[1fr_1fr]">
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-soft p-2.5 text-brand">
                        @include('partials.icon', ['name' => $service['icon']])
                    </span>
                    <h1 class="mt-5 text-4xl font-extrabold tracking-tight md:text-5xl">{{ $service['title'] }}</h1>
                    <p class="mt-5 text-lg leading-relaxed text-ink-soft">{{ $service['description'] }}</p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('contact') }}" class="btn btn-brand">Заявете оферта</a>
                        <a href="tel:{{ config('site.phone_href') }}" class="btn btn-outline">
                            @include('partials.icon', ['name' => 'phone', 'class' => 'h-5 w-5'])
                            {{ config('site.phone') }}
                        </a>
                    </div>
                </div>
                <div class="overflow-hidden rounded-[1.5rem] bg-sand shadow-xl">
                    <img src="{{ asset('images/'.$service['cover'].'.jpg') }}" alt="{{ $service['title'] }} – Бургас" class="aspect-[4/3] w-full object-cover" fetchpriority="high">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-6 lg:grid-cols-2">
            <div class="rounded-2xl bg-cream p-8">
                <h2 class="text-2xl font-extrabold">Какво включва услугата</h2>
                <ul class="mt-6 space-y-4">
                    @foreach ($service['features'] as $feature)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand text-white">@include('partials.icon', ['name' => 'check', 'class' => 'h-4 w-4'])</span>
                            <span class="text-ink-soft">{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl bg-sea p-8 text-white">
                <h2 class="text-2xl font-extrabold">Предимства</h2>
                <ul class="mt-6 space-y-4">
                    @foreach ($service['benefits'] as $benefit)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-amber-300 text-ink">@include('partials.icon', ['name' => 'check', 'class' => 'h-4 w-4'])</span>
                            <span class="text-white/85">{{ $benefit }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="section-heading">Снимки от наши обекти</h2>
            <div class="mt-8 columns-2 gap-3 md:columns-3 md:gap-4">
                @foreach ($photos as $key)
                    <a href="{{ asset('images/'.$key.'.jpg') }}" data-lightbox="service" data-alt="{{ $service['title'] }} – Бургас" class="photo-card mb-3 block break-inside-avoid overflow-hidden rounded-xl bg-sand md:mb-4">
                        @include('partials.photo', ['key' => $key, 'alt' => $service['title'].' – Бургас', 'class' => 'h-auto w-full'])
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-sand px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-2xl font-extrabold">Други услуги</h2>
            <div class="mt-6 flex flex-wrap gap-3">
                @foreach ($services as $otherSlug => $other)
                    @continue($otherSlug === $slug)
                    <a href="{{ route('service', $otherSlug) }}" class="rounded-full border border-ink/15 bg-white px-5 py-2.5 text-sm font-bold transition hover:border-brand hover:text-brand">{{ $other['title'] }}</a>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.cta', ['title' => 'Искате оферта за '.mb_strtolower($service['title']).'?'])
@endsection
