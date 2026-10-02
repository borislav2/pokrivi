@extends('layouts.site')

@section('title', 'За нас | Покривни услуги в Бургас')
@section('meta_description', 'Научете повече за нашия екип, опита и ангажимента ни към надеждни покривни и строителни решения в Бургас.')

@section('content')
    <section class="px-4 py-14 sm:px-6 md:py-20 lg:px-8">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">
            <div>
                <p class="eyebrow">За нас</p>
                <h1 class="mt-3 text-4xl font-extrabold tracking-tight md:text-5xl">Надеждни покривни решения с опит и отговорност</h1>
                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-ink-soft">Работим с частни клиенти и фирми, които търсят качествена работа, професионално отношение и спазени срокове. Всеки покрив за нас е личен ангажимент – от първия оглед до последната проверка.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn btn-brand">Заявете оферта</a>
                    <a href="{{ route('gallery') }}" class="btn btn-outline">Вижте обектите ни</a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-3 -z-10 -rotate-2 rounded-[2rem] bg-sand"></div>
                <img src="{{ asset('images/obekti-01.jpg') }}" alt="Завършен обект – къща с нов покрив и веранда" width="1400" height="1050" class="aspect-[4/3] w-full rounded-[1.5rem] object-cover shadow-xl" fetchpriority="high">
            </div>
        </div>
    </section>

    <section class="bg-sand px-4 py-14 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-6 md:grid-cols-3">
            @foreach ([['20+', 'Години опит', 'Дългогодишна практика в строителството и монтажа на покривни системи.'], ['1000+', 'Проекта', 'Ремонти, монтажи и реконструкции в различни сгради.'], ['10–30', 'Години гаранция', 'Качествени материали и надеждна работа, която издържа във времето.']] as [$num, $title, $text])
                <div class="rounded-2xl bg-white p-8">
                    <div class="text-4xl font-extrabold text-brand">{{ $num }}</div>
                    <h2 class="mt-2 text-xl font-extrabold">{{ $title }}</h2>
                    <p class="mt-2 text-ink-soft">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="eyebrow">Защо ние</p>
                <h2 class="section-heading mt-3">Градим доверие във всеки проект</h2>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                @foreach ([
                    ['check', 'Професионализъм', 'Екипът ни работи внимателно и според най-високите стандарти в бранша.'],
                    ['shield', 'Издръжливи материали', 'Използваме системи, които издържат на лошо време и на годините.'],
                    ['frame', 'Точен подход', 'Всеки проект се планира според условията на обекта и желанията ви.'],
                    ['chat', 'Личен контакт', 'Винаги сме на разположение да ви консултираме и да помогнем с избора.'],
                ] as [$icon, $title, $text])
                    <div class="rounded-2xl border border-sand bg-white p-7">
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-soft p-2.5 text-brand">@include('partials.icon', ['name' => $icon])</span>
                        <h3 class="mt-5 text-lg font-extrabold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-soft">{{ $text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2">
            <div class="grid grid-cols-2 gap-3">
                @foreach (['konstrukcii-03', 'keremidi-04', 'verandi-01', 'metalni-03'] as $key)
                    <div class="overflow-hidden rounded-xl bg-sand {{ $loop->odd ? '' : 'mt-6' }}">
                        @include('partials.photo', ['key' => $key, 'alt' => 'Работа на нашия екип', 'class' => 'aspect-[3/4] w-full object-cover'])
                    </div>
                @endforeach
            </div>
            <div>
                <p class="eyebrow">Нашият подход</p>
                <h2 class="section-heading mt-3">От първата консултация до финалната проверка</h2>
                <div class="mt-6 space-y-5 text-lg leading-relaxed text-ink-soft">
                    <p>Първо се запознаваме с вашия обект, нужди и бюджет. След това предлагаме реалистично решение с ясна оферта и срок.</p>
                    <p>По време на изпълнението следим качеството на материалите и монтажа, а след приключване проверяваме всичко заедно с вас.</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.cta', ['title' => 'Нека обсъдим вашия проект'])
@endsection
