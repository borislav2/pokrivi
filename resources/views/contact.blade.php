@extends('layouts.site')

@section('title', 'Контакти | Покривни услуги в Бургас')
@section('meta_description', 'Свържете се с нас за безплатна консултация и оферта за покривни услуги, веранди, навеси, изолация и улуци в Бургас.')

@section('content')
    <section class="bg-sand px-4 py-14 sm:px-6 md:py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <p class="eyebrow">Контакти</p>
            <h1 class="mt-3 max-w-3xl text-4xl font-extrabold tracking-tight md:text-5xl">Свържете се с нас</h1>
            <p class="mt-5 max-w-2xl text-lg text-ink-soft">Обадете се или ни пишете – ще ви консултираме и ще направим безплатна оферта.</p>
        </div>
    </section>

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-8 lg:grid-cols-[0.8fr_1.2fr]">
            <div class="space-y-4">
                <a href="tel:{{ config('site.phone_href') }}" class="group flex items-center gap-5 rounded-2xl bg-brand p-6 text-white transition hover:bg-brand-dark">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-white/15 p-3.5">@include('partials.icon', ['name' => 'phone'])</span>
                    <span>
                        <span class="block text-sm font-bold uppercase tracking-[0.15em] text-white/80">Обадете се</span>
                        <span class="mt-1 block text-xl font-extrabold sm:text-2xl">{{ config('site.phone') }}</span>
                    </span>
                </a>

                <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-5 rounded-2xl border border-sand bg-white p-6 transition hover:border-brand">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-brand-soft p-3.5 text-brand">@include('partials.icon', ['name' => 'mail'])</span>
                    <span class="min-w-0">
                        <span class="block text-sm font-bold uppercase tracking-[0.15em] text-ink-soft">Имейл</span>
                        <span class="mt-1 block break-all text-base font-extrabold sm:text-lg">{{ config('site.email') }}</span>
                    </span>
                </a>

                <div class="flex items-center gap-5 rounded-2xl border border-sand bg-white p-6">
                    <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-brand-soft p-3.5 text-brand">@include('partials.icon', ['name' => 'pin'])</span>
                    <span>
                        <span class="block text-sm font-bold uppercase tracking-[0.15em] text-ink-soft">Район на работа</span>
                        <span class="mt-1 block text-lg font-extrabold">{{ config('site.city') }} и региона</span>
                    </span>
                </div>
            </div>

            <div class="rounded-2xl border border-sand bg-white p-6 sm:p-8">
                <h2 class="text-2xl font-extrabold">Изпратете запитване</h2>
                <p class="mt-2 text-ink-soft">Попълнете формата и ще се отвори имейл със съобщението, готово за изпращане.</p>

                <form id="contact-form" class="mt-8 space-y-5">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-extrabold">Име *</label>
                            <input id="name" name="name" type="text" required autocomplete="name" class="w-full rounded-xl border border-ink/15 bg-cream px-4 py-3.5 outline-none transition focus:border-brand focus:bg-white">
                        </div>
                        <div>
                            <label for="phone" class="mb-2 block text-sm font-extrabold">Телефон *</label>
                            <input id="phone" name="phone" type="tel" required autocomplete="tel" class="w-full rounded-xl border border-ink/15 bg-cream px-4 py-3.5 outline-none transition focus:border-brand focus:bg-white">
                        </div>
                    </div>

                    <div>
                        <label for="service" class="mb-2 block text-sm font-extrabold">Услуга *</label>
                        <select id="service" name="service" required class="w-full rounded-xl border border-ink/15 bg-cream px-4 py-3.5 outline-none transition focus:border-brand focus:bg-white">
                            <option value="">Изберете услуга</option>
                            @foreach (config('site.services') as $s)
                                <option value="{{ $s['title'] }}">{{ $s['title'] }}</option>
                            @endforeach
                            <option value="Друго">Друго</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-extrabold">Съобщение</label>
                        <textarea id="message" name="message" rows="5" placeholder="Опишете накратко какво ви трябва – вид сграда, размер, кога искате да започнем." class="w-full rounded-xl border border-ink/15 bg-cream px-4 py-3.5 outline-none transition focus:border-brand focus:bg-white"></textarea>
                    </div>

                    <button type="submit" class="btn btn-brand w-full !py-4 text-lg">Изпрати запитване</button>
                    <p class="text-center text-sm text-ink-soft">Предпочитате разговор? Обадете се на <a href="tel:{{ config('site.phone_href') }}" class="font-extrabold text-brand">{{ config('site.phone') }}</a>.</p>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault();
            var f = new FormData(this);
            var subject = 'Запитване: ' + f.get('service');
            var body = 'Име: ' + f.get('name') + '\nТелефон: ' + f.get('phone') + '\nУслуга: ' + f.get('service') +
                '\n\n' + (f.get('message') || '');
            window.location.href = 'mailto:{{ config('site.email') }}?subject=' + encodeURIComponent(subject) +
                '&body=' + encodeURIComponent(body);
        });
    </script>
@endpush
