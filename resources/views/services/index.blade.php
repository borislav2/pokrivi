@extends('layouts.site')

@section('title', 'Услуги | Покривни услуги в Бургас')
@section('meta_description', 'Покривни услуги в Бургас – смяна на керемиди, веранди и навеси, изолация, хидроизолация и монтаж на улуци.')

@section('content')
    <main class="pt-28">
        <section class="bg-gradient-to-br from-slate-900 via-blue-900 to-sky-800 px-4 py-20 text-white sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <p class="text-sm font-semibold uppercase tracking-[0.24em] text-amber-300">Нашите услуги</p>
                <h1 class="mt-5 max-w-3xl text-4xl font-black md:text-6xl">Комплексни решения за покриви, външни конструкции и защита</h1>
                <p class="mt-6 max-w-2xl text-lg text-slate-200">Предлагаме професионални услуги за ремонти, монтиране, изолация и довършване на покриви и външни пространства, съобразени с изискванията на всеки дом и бизнес.</p>
            </div>
        </section>

        <section class="px-4 py-20 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($services as $slug => $service)
                        <article class="service-card overflow-hidden rounded-[2rem] bg-white shadow-lg ring-1 ring-slate-200">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" width="1200" height="800" class="h-64 w-full object-cover" loading="lazy" decoding="async" />
                            <div class="p-8">
                                <h2 class="text-2xl font-black text-slate-900">{{ $service['title'] }}</h2>
                                <p class="mt-4 text-slate-600">{{ $service['short_description'] }}</p>
                                <a href="{{ route('service', ['slug' => $slug]) }}" class="mt-6 inline-flex items-center rounded-full bg-blue-700 px-5 py-3 text-sm font-bold text-white transition hover:bg-blue-800">Виж повече</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
