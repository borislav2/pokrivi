@extends('layouts.site')

@section('title', 'Контакти | Покривни услуги в Бургас')
@section('meta_description', 'Свържете се с нас за безплатна консултация и оферта за покривни услуги, веранди, навеси, изолация и ремонти.')

@section('content')
    <main class="pt-28">
        <section class="px-4 py-20 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="mb-14 text-center">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-700">Контакти</p>
                    <h1 class="section-title mt-4 text-4xl font-black text-slate-900 md:text-5xl">Свържете се с нас</h1>
                    <p class="mt-5 text-xl text-slate-600">Попълнете формата и ще се свържем с вас за безплатна консултация и оферта.</p>
                </div>

                <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr]">
                    <div class="rounded-[2rem] bg-slate-900 p-8 text-white shadow-2xl">
                        <h2 class="mb-8 text-3xl font-black">Контакти</h2>

                        <div class="space-y-7">
                            <div class="flex items-start gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-xl">📞</div>
                                <div>
                                    <div class="text-sm uppercase tracking-[0.2em] text-slate-300">Телефон</div>
                                    <a href="tel:+359879189217" class="mt-2 block text-xl font-semibold text-white hover:text-amber-300">+359 87 9189 217</a>
                                </div>
                            </div>
                            <br><br>
                            <div class="flex items-start gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-xl">✉️</div>
                                <div>
                                    <div class="text-sm uppercase tracking-[0.2em] text-slate-300">Имейл</div>
                                    <a href="mailto:stoyan4619@gmail.com" class="mt-2 block text-xl font-semibold text-white hover:text-amber-300">stoyan4619@gmail.com</a>
                                </div>
                            </div>
                            <br><br>
                            <div class="flex items-start gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-xl">📍</div>
                                <div>
                                    <div class="text-sm uppercase tracking-[0.2em] text-slate-300">Адрес</div>
                                    <div class="mt-2 text-xl font-semibold">Бургас, България</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[2rem] bg-white p-8 shadow-xl ring-1 ring-slate-200">
                        <form id="contact-form" class="space-y-6">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-2 block text-sm font-bold text-slate-700">Име *</label>
                                    <input id="name" type="text" name="name" required class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-base text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="Вашето име">
                                </div>
                                <div>
                                    <label for="phone" class="mb-2 block text-sm font-bold text-slate-700">Телефон *</label>
                                    <input id="phone" type="tel" name="phone" required class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-base text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="+359 87 9189 217">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Имейл</label>
                                <input id="email" type="email" name="email" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-base text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="email@example.com">
                            </div>

                            <div>
                                <label for="service" class="mb-2 block text-sm font-bold text-slate-700">Услуга *</label>
                                <select id="service" name="service" required class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-base text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                                    <option value="">Изберете услуга</option>
                                    <option value="Смяна на керемиди">Смяна на керемиди</option>
                                    <option value="Веранди и навеси">Веранди и навеси</option>
                                    <option value="Изолация и хидроизолация">Изолация и хидроизолация</option>
                                    <option value="Беседки и други конструкции">Беседки и други конструкции</option>
                                    <option value="Смяна на улуци">Смяна на улуци</option>
                                    <option value="Друго">Друго</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="mb-2 block text-sm font-bold text-slate-700">Съобщение</label>
                                <textarea id="message" rows="5" name="message" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-base text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="Опишете вашия проект..."></textarea>
                            </div>

                            <button type="submit" class="btn-primary w-full rounded-2xl px-6 py-4 text-lg font-bold text-white">📝 Изпрати запитване</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.getElementById('contact-form')?.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(this);
            const name = formData.get('name') || 'Клиент';
            const phone = formData.get('phone') || '';
            alert(`Благодарим ви, ${name}! Ще се свържем с вас на ${phone} скоро относно избраната услуга.`);
            this.reset();
        });
    </script>
@endsection
