<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="@yield('meta_description', 'Професионални покривни услуги в Бургас – смяна на керемиди, навеси, веранди, изолация и хидроизолация.')">
        <meta property="og:title" content="@yield('title', 'Покривни услуги Бургас')">
        <meta property="og:description" content="@yield('meta_description', 'Професионални покривни услуги в Бургас – смяна на керемиди, навеси, веранди, изолация и хидроизолация.')">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Покривни Услуги">
        <meta property="og:image" content="https://static.wixstatic.com/media/01d5f1_a480064ffff64758aa96a8e9f6a75477~mv2.jpg/v1/fill/w_640,h_578,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/01d5f1_a480064ffff64758aa96a8e9f6a75477~mv2.jpg">
        <link rel="canonical" href="{{ url()->current() }}">
        <title>@yield('title', 'Покривни услуги Бургас')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="dns-prefetch" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://images.unsplash.com">
        <link rel="dns-prefetch" href="https://images.unsplash.com">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                @import 'tailwindcss';
            </style>
        @endif

        <style>
            @theme {
                --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
            }

            :root {
                --primary-dark: #1a365d;
                --primary: #2c5282;
                --primary-light: #3182ce;
                --accent: #d69e2e;
                --accent-light: #facc15;
                --page-bg: #f8fafc;
            }

            html { scroll-behavior: smooth; }
            body { font-family: 'Inter', sans-serif; background: var(--page-bg); }
            .glass-nav {
                backdrop-filter: blur(20px);
                background: rgba(255, 255, 255, 0.95);
                box-shadow: 0 6px 30px rgba(15, 23, 42, 0.08);
            }
            .nav-link { position: relative; }
            .nav-link::after {
                content: ''; position: absolute; left: 0; bottom: -6px; width: 0; height: 2px; background: linear-gradient(90deg, var(--accent), var(--accent-light)); transition: width 0.3s ease;
            }
            .nav-link:hover::after { width: 100%; }
            .btn-primary {
                background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
                color: white;
                box-shadow: 0 12px 30px rgba(214, 158, 46, 0.24);
            }
            .btn-primary:hover { transform: translateY(-2px); }
            .site-card { background: rgba(255,255,255,0.9); border: 1px solid rgba(148,163,184,0.2); }
            .section-title::after {
                content: ''; display: block; width: 72px; height: 4px; margin: 1rem auto 0; border-radius: 999px; background: linear-gradient(90deg, var(--accent), var(--accent-light));
            }
            .service-card { transition: transform 0.2s ease, box-shadow 0.2s ease; }
            .service-card:hover { transform: translateY(-8px); box-shadow: 0 24px 40px rgba(15, 23, 42, 0.12); }
            .hero-surface {
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.88), rgba(30, 64, 175, 0.72)),
                    url('https://static.wixstatic.com/media/01d5f1_a480064ffff64758aa96a8e9f6a75477~mv2.jpg/v1/fill/w_640,h_578,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/01d5f1_a480064ffff64758aa96a8e9f6a75477~mv2.jpg') center / cover no-repeat;
            }
            .image-grid img { object-fit: cover; }
        </style>
    </head>
    <body class="bg-slate-50 text-slate-900 antialiased">
        <nav class="fixed inset-x-0 top-0 z-50 glass-nav">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Покривни услуги начална страница">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 text-2xl shadow-lg">🏠</div>
                    <div>
                        <div class="text-lg font-bold text-slate-900">Покривни Услуги</div>
                        <div class="text-[11px] font-medium uppercase tracking-[0.18em] text-slate-500">Бургас</div>
                    </div>
                </a>

                <div class="hidden items-center gap-8 md:flex">
                    <a href="{{ route('services') }}" class="nav-link text-sm font-semibold text-slate-700 hover:text-blue-700">Услуги</a>
                    <a href="{{ route('about') }}" class="nav-link text-sm font-semibold text-slate-700 hover:text-blue-700">За нас</a>
                    <a href="{{ route('contact') }}" class="nav-link text-sm font-semibold text-slate-700 hover:text-blue-700">Контакти</a>
                    <a href="tel:+359879189217" class="btn-primary inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-bold text-white">📞 +359 87 9189 217</a>
                </div>

                <button id="mobile-menu-btn" class="rounded-xl border border-slate-200 bg-white p-3 md:hidden" aria-label="Отвори меню" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white md:hidden">
                <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-6">
                    <a href="{{ route('services') }}" class="text-base font-semibold text-slate-700">Услуги</a>
                    <a href="{{ route('about') }}" class="text-base font-semibold text-slate-700">За нас</a>
                    <a href="{{ route('contact') }}" class="text-base font-semibold text-slate-700">Контакти</a>
                    <a href="tel:+359879189217" class="btn-primary inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-bold text-white">📞 +359 87 9189 217</a>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="bg-slate-950 text-slate-200">
            <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-4 lg:px-8">
                <div class="lg:col-span-2">
                    <div class="mb-5 flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 text-2xl">🏠</div>
                        <span class="text-2xl font-bold text-white">Покривни Услуги</span>
                    </div>
                    <p class="max-w-xl text-slate-400">Професионални покривни услуги с гарантирано качество и достъпни цени в Бургас и цяла България.</p>
                </div>

                <div>
                    <h3 class="mb-5 text-lg font-bold text-white">Услуги</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li><a href="{{ route('service', ['slug' => 'smyana-na-keremidi']) }}" class="hover:text-white">Смяна на керемиди</a></li>
                        <li><a href="{{ route('service', ['slug' => 'verandi-i-navesi']) }}" class="hover:text-white">Веранди и навеси</a></li>
                        <li><a href="{{ route('service', ['slug' => 'izolacia-i-hidroizolacia']) }}" class="hover:text-white">Изолация и хидроизолация</a></li>
                        <li><a href="{{ route('service', ['slug' => 'smiana-na-uluci']) }}" class="hover:text-white">Смяна на улуци</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-5 text-lg font-bold text-white">Контакти</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li>📞 +359 87 9189 217</li>
                        <li>📧 stoyan4619@gmail.com</li>
                        <li>📍 Бургас, България</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 py-6 text-center text-sm text-slate-400">© {{ date('Y') }} Покривни Услуги. Всички права запазени.</div>
        </footer>

        <a href="tel:+359879189217" class="fixed bottom-6 right-6 z-50 rounded-full bg-green-500 p-4 text-white shadow-lg transition hover:scale-110 md:hidden" aria-label="Обади се">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
        </a>

        <script>
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function () {
                    const isHidden = mobileMenu.classList.toggle('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', String(!isHidden));
                });
            }
        </script>
    </body>
</html>
