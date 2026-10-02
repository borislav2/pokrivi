@extends('layouts.site')

@section('title', 'Галерия | Покривни услуги в Бургас')
@section('meta_description', 'Снимки от наши обекти в Бургас: керемидени и метални покриви, хидроизолация, конструкции, веранди, навеси, беседки и улуци.')

@php
    $categories = config('gallery');
    $all = [];
    foreach ($categories as $catKey => $cat) {
        foreach (array_keys($cat['images']) as $key) {
            $all[] = ['key' => $key, 'cat' => $catKey, 'label' => $cat['label']];
        }
    }
@endphp

@section('content')
    <section class="bg-sand px-4 py-14 sm:px-6 md:py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <p class="eyebrow">Галерия</p>
            <h1 class="mt-3 max-w-3xl text-4xl font-extrabold tracking-tight md:text-5xl">Снимки от наши обекти</h1>
            <p class="mt-5 max-w-2xl text-lg text-ink-soft">Покриви, конструкции, веранди и навеси, изпълнени от нашия екип в Бургас и региона.</p>
        </div>
    </section>

    <section class="px-4 py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-wrap gap-2" role="group" aria-label="Филтър по категория" id="gallery-filters">
                <button type="button" data-filter="all" aria-pressed="true" class="filter-chip rounded-full border border-ink/15 bg-white px-4 py-2 text-sm font-bold transition hover:border-brand aria-pressed:border-brand aria-pressed:bg-brand aria-pressed:text-white">Всички <span class="opacity-70">({{ count($all) }})</span></button>
                @foreach ($categories as $catKey => $cat)
                    <button type="button" data-filter="{{ $catKey }}" aria-pressed="false" class="filter-chip rounded-full border border-ink/15 bg-white px-4 py-2 text-sm font-bold transition hover:border-brand aria-pressed:border-brand aria-pressed:bg-brand aria-pressed:text-white">{{ $cat['label'] }} <span class="opacity-70">({{ count($cat['images']) }})</span></button>
                @endforeach
            </div>

            <div id="gallery-grid" class="mt-8 columns-2 gap-3 md:columns-3 md:gap-4 xl:columns-4">
                @foreach ($all as $item)
                    <a href="{{ asset('images/'.$item['key'].'.jpg') }}" data-lightbox="gallery" data-cat="{{ $item['cat'] }}" data-alt="{{ $item['label'] }} – Бургас" class="gallery-item photo-card mb-3 block break-inside-avoid overflow-hidden rounded-xl bg-sand md:mb-4">
                        @include('partials.photo', ['key' => $item['key'], 'alt' => $item['label'].' – Бургас', 'class' => 'h-auto w-full'])
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.cta')
@endsection

@push('scripts')
    <script>
        (function () {
            var chips = document.querySelectorAll('.filter-chip');
            var items = document.querySelectorAll('.gallery-item');
            chips.forEach(function (chip) {
                chip.addEventListener('click', function () {
                    var f = chip.getAttribute('data-filter');
                    chips.forEach(function (c) { c.setAttribute('aria-pressed', String(c === chip)); });
                    items.forEach(function (item) {
                        item.hidden = f !== 'all' && item.getAttribute('data-cat') !== f;
                    });
                });
            });
        })();
    </script>
@endpush
