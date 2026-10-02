@extends('layouts.site')

@section('title', 'Покривни услуги Бургас – керемиди, хидроизолация, веранди, навеси, улуци')
@section('meta_description', 'Професионални покривни услуги в Бургас: смяна на керемиди, метални покриви, хидроизолация, веранди, навеси, беседки и улуци. Гаранция до 30 години. Безплатна консултация и оферта.')

@section('content')
    {{-- Hero --}}
    <section class="overflow-hidden">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-12 sm:px-6 md:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:px-8">
            <div>
                <p class="eyebrow">Покривни услуги · Бургас</p>
                <h1 class="mt-4 text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">Покриви, които пазят дома ви с <span class="text-brand">десетилетия</span></h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-ink-soft">Смяна на керемиди, метални покриви, хидроизолация, веранди, навеси и улуци – изпълнени прецизно, с качествени материали и гаранция до 30 години.</p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn btn-brand">Заявете безплатна оферта</a>
                    <a href="tel:{{ config('site.phone_href') }}" class="btn btn-outline">
                        @include('partials.icon', ['name' => 'phone', 'class' => 'h-5 w-5'])
                        {{ config('site.phone') }}
                    </a>
                </div>

                <ul class="mt-10 grid gap-3 text-sm font-bold sm:grid-cols-3">
                    @foreach (['Безплатен оглед и оферта', 'Гаранция 10–30 години', 'Бургас и региона'] as $point)
                        <li class="flex items-center gap-2">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-soft text-brand">
                                @include('partials.icon', ['name' => 'check', 'class' => 'h-4 w-4'])
                            </span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="relative">
                <div class="absolute -inset-3 -z-10 rotate-2 rounded-[2rem] bg-sand"></div>
                <img src="{{ asset('images/hero.jpg') }}" width="1187" height="950" alt="Нов керемиден покрив, изпълнен от нашия екип в Бургас" class="aspect-[5/4] w-full rounded-[1.5rem] object-cover shadow-xl" fetchpriority="high">
                <div class="absolute -bottom-5 left-4 flex items-center gap-3 rounded-2xl bg-ink px-5 py-4 text-white shadow-xl sm:left-8">
                    <span class="text-3xl font-extrabold text-brand">20+</span>
                    <span class="text-sm font-bold leading-tight">години опит<br>в покривите</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Numbers --}}
    <section class="bg-sand">
        <div class="mx-auto grid max-w-7xl grid-cols-2 gap-6 px-4 py-10 text-center sm:px-6 md:grid-cols-4 lg:px-8">
            @foreach ([['20+', 'години опит'], ['1000+', 'изпълнени проекта'], ['10–30', 'години гаранция'], ['0 лв.', 'за оглед и оферта']] as [$num, $label])
                <div>
                    <div class="text-3xl font-extrabold text-brand md:text-4xl">{{ $num }}</div>
                    <div class="mt-1 text-sm font-bold text-ink-soft">{{ $label }}</div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Services --}}
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="eyebrow">Какво правим</p>
                <h2 class="section-heading mt-3">Всичко за покрива – на едно място</h2>
                <p class="mt-4 text-lg text-ink-soft">От подмяна на керемиди до нови веранди и навеси. Един екип отговаря за целия проект.</p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($services as $slug => $service)
                    <a href="{{ route('service', $slug) }}" class="photo-card group flex flex-col overflow-hidden rounded-2xl border border-sand bg-white transition hover:-translate-y-1 hover:shadow-xl">
                        <div class="relative aspect-[4/3] overflow-hidden bg-sand">
                            @include('partials.photo', ['key' => $service['cover'], 'alt' => $service['title']])
                            <span class="absolute left-3 top-3 flex h-10 w-10 items-center justify-center rounded-xl bg-white/95 p-2 text-brand shadow">
                                @include('partials.icon', ['name' => $service['icon']])
                            </span>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <h3 class="text-lg font-extrabold leading-snug">{{ $service['title'] }}</h3>
                            <p class="mt-2 flex-1 text-sm leading-relaxed text-ink-soft">{{ $service['short_description'] }}</p>
                            <span class="mt-4 inline-flex items-center gap-1.5 text-sm font-extrabold text-brand">
                                Научете повече
                                @include('partials.icon', ['name' => 'arrow', 'class' => 'h-4 w-4 transition group-hover:translate-x-1'])
                            </span>
                        </div>
                    </a>
                @endforeach

                <a href="{{ route('contact') }}" class="group flex flex-col justify-between rounded-2xl bg-brand p-6 text-white transition hover:-translate-y-1 hover:bg-brand-dark hover:shadow-xl">
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/15 p-2.5">
                            @include('partials.icon', ['name' => 'chat'])
                        </span>
                        <h3 class="mt-5 text-xl font-extrabold leading-snug">Имате друг проект?</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/85">Разкажете ни какво ви трябва и ще ви предложим решение и цена.</p>
                    </div>
                    <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-extrabold">
                        Свържете се с нас
                        @include('partials.icon', ['name' => 'arrow', 'class' => 'h-4 w-4 transition group-hover:translate-x-1'])
                    </span>
                </a>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section class="bg-white px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <p class="eyebrow">Наши обекти</p>
                    <h2 class="section-heading mt-3">Реална работа, реални резултати</h2>
                </div>
                <a href="{{ route('gallery') }}" class="btn btn-outline self-start sm:self-auto">Всички снимки</a>
            </div>

            @php($featured = ['obekti-01', 'keremidi-03', 'verandi-01', 'obekti-04', 'metalni-03', 'keremidi-04'])
            <div class="mt-10 grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-4">
                @foreach ($featured as $i => $key)
                    <a href="{{ asset('images/'.$key.'.jpg') }}" data-lightbox="home" data-alt="Обект на {{ config('site.name') }}" class="photo-card relative block overflow-hidden rounded-xl bg-sand {{ $i === 0 ? 'col-span-2 aspect-[16/9] md:col-span-2 md:row-span-2 md:aspect-auto' : 'aspect-[4/3]' }}">
                        @include('partials.photo', ['key' => $key, 'alt' => 'Обект на '.config('site.name'), 'full' => $i === 0])
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="eyebrow">Как работим</p>
                <h2 class="section-heading mt-3">От обаждането до готовия покрив</h2>
            </div>
            <ol class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach (config('site.process') as $i => $step)
                    <li class="rounded-2xl border border-sand bg-white p-6">
                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-ink text-lg font-extrabold text-white">{{ $i + 1 }}</span>
                        <h3 class="mt-5 text-lg font-extrabold">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-soft">{{ $step['text'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Why us --}}
    <section class="bg-sea px-4 py-20 text-white sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="eyebrow !text-amber-300">Защо ние</p>
                <h2 class="section-heading mt-3">Защо да изберете нас?</h2>
            </div>
            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['clock', '20+ години опит', 'Дългогодишен опит в покривните услуги с много доволни клиенти в Бургас и региона.'],
                    ['award', 'Гарантирано качество', 'Използваме качествени материали и съвременна техника, с гаранция 10–30 години.'],
                    ['coins', 'Честни цени', 'Ясна оферта с най-доброто съотношение цена–качество, без скрити разходи.'],
                    ['check', 'Спазени срокове', 'Работим организирано и в срок, за да имате минимално неудобство.'],
                ] as [$icon, $title, $text])
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 p-2.5 text-amber-300">
                            @include('partials.icon', ['name' => $icon])
                        </span>
                        <h3 class="mt-5 text-lg font-extrabold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-white/75">{{ $text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto flex max-w-5xl flex-col items-center rounded-[2rem] bg-ink px-6 py-14 text-center text-white sm:px-12">
            <h2 class="section-heading">Готови да започнем вашия проект?</h2>
            <p class="mt-4 max-w-xl text-lg text-stone-300">Обадете се или ни пишете за безплатна консултация и оферта.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="tel:{{ config('site.phone_href') }}" class="btn btn-brand">
                    @include('partials.icon', ['name' => 'phone', 'class' => 'h-5 w-5'])
                    {{ config('site.phone') }}
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light">Изпратете запитване</a>
            </div>
        </div>
    </section>
@endsection
