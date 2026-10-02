@extends('layouts.site')

@section('title', 'Услуги | Покривни услуги в Бургас')
@section('meta_description', 'Смяна на керемиди, метални покриви, хидроизолация, веранди, навеси, беседки и улуци в Бургас. Вижте всички наши услуги.')

@section('content')
    <section class="bg-sand px-4 py-14 sm:px-6 md:py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <p class="eyebrow">Услуги</p>
            <h1 class="mt-3 max-w-3xl text-4xl font-extrabold tracking-tight md:text-5xl">Покривни и строителни услуги в Бургас</h1>
            <p class="mt-5 max-w-2xl text-lg text-ink-soft">Изберете услуга, за да видите какво включва и снимки от наши обекти. Консултацията и офертата са безплатни.</p>
        </div>
    </section>

    <section class="px-4 pt-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-8">
            @foreach ($services as $slug => $service)
                <a href="{{ route('service', $slug) }}" class="photo-card group grid overflow-hidden rounded-2xl border border-sand bg-white transition hover:shadow-xl md:grid-cols-[0.8fr_1.2fr]">
                    <div class="relative aspect-[4/3] overflow-hidden bg-sand md:aspect-auto md:min-h-[260px] {{ $loop->even ? 'md:order-2' : '' }}">
                        @include('partials.photo', ['key' => $service['cover'], 'alt' => $service['title']])
                    </div>
                    <div class="flex flex-col justify-center p-6 md:p-10">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-soft p-2.5 text-brand">
                            @include('partials.icon', ['name' => $service['icon']])
                        </span>
                        <h2 class="mt-4 text-2xl font-extrabold">{{ $service['title'] }}</h2>
                        <p class="mt-3 leading-relaxed text-ink-soft">{{ $service['short_description'] }}</p>
                        <span class="mt-5 inline-flex items-center gap-1.5 font-extrabold text-brand">
                            Виж подробности
                            @include('partials.icon', ['name' => 'arrow', 'class' => 'h-5 w-5 transition group-hover:translate-x-1'])
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    @include('partials.cta')
@endsection
