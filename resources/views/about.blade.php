@extends('layouts.site')

@section('title', 'За нас | Покривни услуги в Бургас')
@section('meta_description', 'Научете повече за нашата компания, опита, качеството и ангажимента за надеждни покривни и строителни услуги в Бургас.')

@section('content')
    <main class="pt-28">
        <section class="hero-surface px-4 py-20 text-white sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">
                <div>
                    <p class="mb-4 text-sm font-semibold uppercase tracking-[0.25em] text-amber-300">За нас</p>
                    <h1 class="text-4xl font-black md:text-5xl">Надеждни покривни решения с опит и отговорност</h1>
                    <p class="mt-6 max-w-2xl text-lg text-slate-200">Работим с фирми и частни клиенти, които търсят качествена работа, професионализъм и здравословно отношение към проекта. Всяка услуга се изпълнява с внимание към детайла и съобразяване с бюджета и срока.</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-bold text-white">Запитване</a>
                        <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-full border border-white/60 bg-white/5 px-8 py-4 text-base font-bold text-white backdrop-blur-sm">Виж услугите</a>
                    </div>
                </div>

                <div class="overflow-hidden rounded-[2rem] border border-white/20 bg-white/5 p-3 backdrop-blur-sm">
                    <img src="https://pokrivi94.com/wp-content/uploads/2026/04/q18.jpg" alt="Покривни дейности" width="1200" height="900" class="h-[480px] w-full rounded-[1.5rem] object-cover" loading="eager" />
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-6 md:grid-cols-3">
                    <div class="site-card rounded-3xl p-8 shadow-sm">
                        <div class="mb-4 text-4xl font-black text-blue-700">20+</div>
                        <h2 class="mb-2 text-xl font-bold text-slate-900">Години опит</h2>
                        <p class="text-slate-600">Дългогодишна практика в строителството и монтажа на покривни системи.</p>
                    </div>
                    <div class="site-card rounded-3xl p-8 shadow-sm">
                        <div class="mb-4 text-4xl font-black text-blue-700">1000+</div>
                        <h2 class="mb-2 text-xl font-bold text-slate-900">Проекта</h2>
                        <p class="text-slate-600">Извършили сме десетки ремонти, монтажи и реконструкции в различни сгради.</p>
                    </div>
                    <div class="site-card rounded-3xl p-8 shadow-sm">
                        <div class="mb-4 text-4xl font-black text-blue-700">10-30</div>
                        <h2 class="mb-2 text-xl font-bold text-slate-900">Години гаранция</h2>
                        <p class="text-slate-600">Предлагаме качествени материали и надежна работа, която да издържи години.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-700">Защо нас</p>
                    <h2 class="section-title mt-4 text-4xl font-black text-slate-900">Строим доверие в всеки проект</h2>
                </div>

                <div class="mt-16 grid gap-8 md:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-3xl bg-slate-50 p-8 shadow-sm">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-2xl">✅</div>
                        <h3 class="mb-3 text-xl font-bold text-slate-900">Професионализъм</h3>
                        <p class="text-slate-600">Екипът ни работи внимателно и съобразно най-високите стандарти в бранша.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-50 p-8 shadow-sm">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100 text-2xl">🛠️</div>
                        <h3 class="mb-3 text-xl font-bold text-slate-900">Издръжливи материали</h3>
                        <p class="text-slate-600">Използваме системи, които издържат на неблагоприятни атмосферни условия и време.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-50 p-8 shadow-sm">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-2xl">📐</div>
                        <h3 class="mb-3 text-xl font-bold text-slate-900">Точен подход</h3>
                        <p class="text-slate-600">Всеки проект се планира според специфичните условия на обекта и изискванията на клиента.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-50 p-8 shadow-sm">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-100 text-2xl">🤝</div>
                        <h3 class="mb-3 text-xl font-bold text-slate-900">Личен контакт</h3>
                        <p class="text-slate-600">Винаги сме на разположение да ви консултираме и да ви помогнем да изберете най-доброто решение.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-[1fr_1.1fr] items-center">
                    <div>
                        <img src="https://pokriv-remont.com/wp-content/uploads/2021/02/20-viber_%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5_2020-03-04_14-51-36-1-1080x675.jpg" alt="Покривна конструкция" width="1200" height="900" class="h-[500px] w-full rounded-[2rem] object-cover shadow-2xl" loading="lazy" />
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-amber-600">Нашият подход</p>
                        <h2 class="mt-4 text-4xl font-black text-slate-900">От първата консултация до финалната проверка</h2>
                        <div class="mt-8 space-y-6 text-slate-700">
                            <p>Първо се запознаваме с вашия обект, нужди и бюджет. След това предлагаме решение, което е реалистично и устойчиво в дългосрочен план.</p>
                            <p>По време на изпълнението следим качеството на материалите и монтажа, а след приключване провеждаме финална проверка и даваме ясни препоръки за поддръжка.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
