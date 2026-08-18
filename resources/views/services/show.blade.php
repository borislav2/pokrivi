@extends('layouts.site')

@section('title', $service['title'] . ' | Покривни услуги в Бургас')
@section('meta_description', $service['short_description'])

@section('content')
    <main class="pt-28">
        <section class="px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="mb-10 flex flex-wrap items-center gap-3 text-sm font-medium text-slate-500">
                    <a href="{{ route('home') }}" class="hover:text-blue-700">Начало</a>
                    <span>/</span>
                    <a href="{{ route('services') }}" class="hover:text-blue-700">Услуги</a>
                    <span>/</span>
                    <span class="text-slate-700">{{ $service['title'] }}</span>
                </div>

                <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-blue-700">Услуга</p>
                        <h1 class="mt-4 text-4xl font-black text-slate-900 md:text-5xl">{{ $service['title'] }}</h1>
                        <p class="mt-6 text-lg leading-8 text-slate-600">{{ $service['description'] }}</p>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-bold text-white">Заяви оферта</a>
                            <a href="tel:+359879189217" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-8 py-4 text-base font-bold text-slate-800">📞 Обадете се</a>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-[2rem] shadow-2xl ring-1 ring-slate-200">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" width="1200" height="900" class="h-[500px] w-full object-cover" loading="eager" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="rounded-[2rem] bg-slate-50 p-8 ring-1 ring-slate-200">
                        <h2 class="text-2xl font-black text-slate-900">Какво включва услугата</h2>
                        <ul class="mt-6 space-y-4 text-slate-700">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-amber-200 text-xs font-bold text-amber-900">✓</span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="rounded-[2rem] bg-blue-50 p-8 ring-1 ring-slate-200">
                        <h2 class="text-2xl font-black text-slate-900">Предимства</h2>
                        <ul class="mt-6 space-y-4 text-slate-700">
                            @foreach ($service['benefits'] as $benefit)
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-200 text-xs font-bold text-blue-900">★</span>
                                    <span>{{ $benefit }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @if (!empty($service['gallery']))
            <section class="px-4 py-20 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl">
                    <div class="mb-10 text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-amber-600">Галерия</p>
                        <h2 class="mt-4 text-4xl font-black text-slate-900">Примери от реални проекти</h2>
                    </div>
                    <div class="image-grid grid gap-6 md:grid-cols-3">
                        @foreach ($service['gallery'] as $image)
                            <img src="{{ $image }}" alt="{{ $service['title'] }} - фото" width="1200" height="900" class="h-72 w-full rounded-[1.5rem] object-cover shadow-lg" loading="lazy" />
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
