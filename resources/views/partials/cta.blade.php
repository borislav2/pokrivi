<section class="px-4 pb-20 pt-16 sm:px-6 lg:px-8">
    <div class="mx-auto flex max-w-5xl flex-col items-center rounded-[2rem] bg-ink px-6 py-12 text-center text-white sm:px-12">
        <h2 class="section-heading">{{ $title ?? 'Нуждаете се от оферта?' }}</h2>
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
