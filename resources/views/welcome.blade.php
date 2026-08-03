<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Професионални услуги за покриви - смяна на керемиди, веранди, навеси, изолация, хидроизолация, беседки и улуци. Качествени услуги на достъпни цени.">
        <title>Покривни Услуги - Професионални Решения за Вашия Покрив</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
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
                --accent-light: #ecc94b;
            }
            .hero-section {
                background: linear-gradient(135deg, rgba(26, 54, 93, 0.95) 0%, rgba(44, 82, 130, 0.9) 50%, rgba(49, 130, 206, 0.85) 100%),
                        url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
            .service-card {
                transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                border: 1px solid #e2e8f0;
            }
            .service-card:hover {
                transform: translateY(-15px);
                box-shadow: 0 30px 60px rgba(0,0,0,0.15);
                border-color: var(--primary-light);
            }
            .service-card .icon-wrapper {
                transition: all 0.3s ease;
            }
            .service-card:hover .icon-wrapper {
                transform: scale(1.1) rotate(5deg);
            }
            .btn-primary {
                background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                box-shadow: 0 4px 15px rgba(214, 158, 46, 0.4);
            }
            .btn-primary:hover {
                box-shadow: 0 8px 30px rgba(214, 158, 46, 0.5);
                transform: translateY(-3px);
            }
            .btn-secondary {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                border: 2px solid white;
            }
            .btn-secondary:hover {
                background: white;
                color: var(--primary-dark);
                transform: translateY(-3px);
            }
            .nav-link {
                position: relative;
                font-weight: 500;
            }
            .nav-link::after {
                content: '';
                position: absolute;
                width: 0;
                height: 3px;
                bottom: -6px;
                left: 0;
                background: linear-gradient(90deg, var(--accent), var(--accent-light));
                transition: width 0.3s ease;
                border-radius: 2px;
            }
            .nav-link:hover::after {
                width: 100%;
            }
            .stat-card {
                backdrop-filter: blur(15px);
                background: rgba(255, 255, 255, 0.15);
                border: 2px solid rgba(255, 255, 255, 0.3);
                transition: all 0.3s ease;
            }
            .stat-card:hover {
                background: rgba(255, 255, 255, 0.25);
                transform: translateY(-5px);
            }
            .guarantee-badge {
                background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
                animation: pulse-glow 2s ease-in-out infinite;
            }
            @keyframes pulse-glow {
                0%, 100% { box-shadow: 0 0 20px rgba(214, 158, 46, 0.4); }
                50% { box-shadow: 0 0 40px rgba(214, 158, 46, 0.6); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(2deg); }
            }
            .scroll-smooth {
                scroll-behavior: smooth;
            }
            .glass-nav {
                backdrop-filter: blur(20px);
                background: rgba(255, 255, 255, 0.98);
                box-shadow: 0 4px 30px rgba(0,0,0,0.1);
            }
            .section-title {
                position: relative;
                display: inline-block;
            }
            .section-title::after {
                content: '';
                position: absolute;
                width: 60px;
                height: 4px;
                background: linear-gradient(90deg, var(--accent), var(--accent-light));
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 2px;
            }
            .feature-icon {
                background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            }
            .contact-card {
                background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
                border: 1px solid #e2e8f0;
            }
            .form-input {
                transition: all 0.3s ease;
                border: 2px solid #e2e8f0;
            }
            .form-input:focus {
                border-color: var(--primary-light);
                box-shadow: 0 0 0 4px rgba(49, 130, 206, 0.1);
            }
            .cta-section {
                background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 50%, var(--primary-light) 100%);
            }
        </style>
    </head>
    <body class="bg-gray-50 text-gray-900 scroll-smooth">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 glass-nav z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center text-2xl shadow-lg">
                            🏠
                        </div>
                        <div>
                            <span class="text-xl font-bold text-gray-900">Покривни Услуги</span>
                            <div class="text-xs text-gray-500 font-medium">Бургас, България</div>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-10">
                        <a href="#services" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Услуги</a>
                        <a href="#about" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">За нас</a>
                        <a href="#contact" class="nav-link text-gray-700 hover:text-blue-600 transition-colors">Контакти</a>
                        <a href="tel:+359879189217" class="btn-primary text-white px-8 py-3 rounded-full font-bold transition-all flex items-center gap-2">
                            <span>📞</span>
                            <span>+359 87 9189 217</span>
                        </a>
                    </div>
                    <button id="mobile-menu-btn" class="md:hidden p-3 rounded-xl hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white border-t shadow-lg">
                <div class="px-4 py-6 space-y-4">
                    <a href="#services" class="block text-gray-700 hover:text-blue-600 font-semibold py-2">Услуги</a>
                    <a href="#about" class="block text-gray-700 hover:text-blue-600 font-semibold py-2">За нас</a>
                    <a href="#contact" class="block text-gray-700 hover:text-blue-600 font-semibold py-2">Контакти</a>
                    <a href="tel:+359879189217" class="btn-primary block text-white text-center px-8 py-4 rounded-full font-bold">
                        📞 +359 87 9189 217
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section min-h-screen flex items-center pt-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/30"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="text-white">
                        <div class="guarantee-badge inline-block rounded-full px-6 py-3 mb-8 shadow-2xl">
                            <span class="text-white font-bold text-sm tracking-wide">🏆 ДОГОВОР С ГАРАНЦИЯ 10-30 ГОДИНИ</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold mb-6 leading-tight">
                            Експерти по<br>
                            <span class="text-yellow-300">Покривни Услуги</span>
                        </h1>
                        <p class="text-xl md:text-2xl mb-10 text-blue-100 leading-relaxed max-w-2xl">
                            Професионално изграждане и ремонт на покриви в Бургас и цяла България. 
                            Над 20 години опит в бранша с доказано качество.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-5 mb-12">
                            <a href="tel:+359879189217" class="btn-primary text-white px-10 py-5 rounded-full font-bold text-xl transition-all text-center flex items-center justify-center gap-3">
                                <span class="text-2xl">📞</span>
                                <span>Звънни сега</span>
                            </a>
                            <a href="#contact" class="btn-secondary bg-white/10 hover:bg-white/20 text-white border-2 border-white/50 px-10 py-5 rounded-full font-bold text-xl transition-all text-center">
                                📝 Безплатна оферта
                            </a>
                        </div>
                        <div class="flex items-center gap-8 flex-wrap">
                            <div class="stat-card rounded-2xl px-8 py-6 text-center min-w-[140px]">
                                <div class="text-4xl font-bold text-yellow-300 mb-1">20+</div>
                                <div class="text-blue-100 text-sm font-medium">Години опит</div>
                            </div>
                            <div class="stat-card rounded-2xl px-8 py-6 text-center min-w-[140px]">
                                <div class="text-4xl font-bold text-yellow-300 mb-1">1000+</div>
                                <div class="text-blue-100 text-sm font-medium">Завършени обекта</div>
                            </div>
                            <div class="stat-card rounded-2xl px-8 py-6 text-center min-w-[140px]">
                                <div class="text-4xl font-bold text-yellow-300 mb-1">100%</div>
                                <div class="text-blue-100 text-sm font-medium">Гаранция</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:block relative">
                        <div class="animate-float relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/30 to-orange-500/30 rounded-3xl blur-3xl"></div>
                            <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                                <svg class="w-full h-auto" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="50" y="200" width="300" height="80" fill="#8B4513" rx="5"/>
                                    <polygon points="40,200 200,80 360,200" fill="#CD853F" stroke="#8B4513" stroke-width="3"/>
                                    <rect x="180" y="200" width="40" height="80" fill="#654321"/>
                                    <rect x="100" y="220" width="30" height="40" fill="#87CEEB" stroke="#4682B4" stroke-width="2"/>
                                    <rect x="270" y="220" width="30" height="40" fill="#87CEEB" stroke="#4682B4" stroke-width="2"/>
                                    <circle cx="200" cy="150" r="15" fill="#FFD700"/>
                                    <path d="M200 135 L200 165" stroke="#FFD700" stroke-width="3"/>
                                    <path d="M185 150 L215 150" stroke="#FFD700" stroke-width="3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-gray-50 to-transparent"></div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-20">
                    <h2 class="section-title text-4xl md:text-5xl font-bold text-gray-900 mb-6">Нашите Услуги</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Предлагаме пълна гама от покривни услуги с гарантирано качество и професионално изпълнение
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🏠
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Смяна на Керемиди</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Професионална подмяна на стари керемиди с нови, висококачествени материали. Гарантираме дълготрайност и естетика.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                    <!-- Service 2 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🏗️
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Нови Веранди и Навеси</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Проектиране и изграждане на модерни веранди и навеси по ваше желание. Функционални и елегантни решения.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                    <!-- Service 3 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🔧
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Иглаждане на Конструкции</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Професионално изравняване и укрепване на покривни конструкции за максимална стабилност и безопасност.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                    <!-- Service 4 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🛡️
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Изолация и Хидроизолация</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Висококачествена топлоизолация и хидроизолация за защита от влага и подобряване на енергийната ефективност.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                    <!-- Service 5 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🌳
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Беседки и Други</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Изграждане на красиви беседки и други конструкции за вашия двор или градина. Индивидуален дизайн.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                    <!-- Service 6 -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-lg">
                        <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            💧
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Смяна на Улуци</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Монтаж и подмяна на улучни системи за ефективно отводняване на дъждовната вода от вашия покрив.</p>
                        <a href="tel:+359879189217" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition-colors group">
                            Поръчай сега 
                            <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="section-title text-4xl md:text-5xl font-bold text-gray-900 mb-8">Защо да изберете нас?</h2>
                        <div class="space-y-8">
                            <div class="flex items-start gap-5 group">
                                <div class="feature-icon w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl shadow-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">20+ години опит</h3>
                                    <p class="text-gray-600 leading-relaxed">Дългогодишен опит в покривните услуги с хиляди доволни клиенти в Бургас и цяла България.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-5 group">
                                <div class="feature-icon w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl shadow-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Гарантирано качество</h3>
                                    <p class="text-gray-600 leading-relaxed">Използваме само висококачествени материали и съвременна техника с гаранция 10-30 години.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-5 group">
                                <div class="feature-icon w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl shadow-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Конкурентни цени</h3>
                                    <p class="text-gray-600 leading-relaxed">Предлагаме най-доброто съотношение цена-качество на пазара без скрити разходи.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-5 group">
                                <div class="feature-icon w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl shadow-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Бързо изпълнение</h3>
                                    <p class="text-gray-600 leading-relaxed">Спазваме сроковете и работим ефективно за ваше удобство и минимално прекъсване.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-card p-10 rounded-3xl shadow-2xl">
                        <h3 class="text-3xl font-bold text-gray-900 mb-8">Свържете се с нас</h3>
                        <div class="space-y-6">
                            <div class="flex items-center gap-5">
                                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Телефон</div>
                                    <a href="tel:+359879189217" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">+359 87 9189 217</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Имейл</div>
                                    <a href="mailto:stoyan4619@gmail.com" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">stoyan4619@gmail.com</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Адрес</div>
                                    <div class="text-xl font-bold text-gray-900">Бургас, България</div>
                                </div>
                            </div>
                        </div>
                        <a href="tel:+359879189217" class="mt-10 block w-full btn-primary text-white text-center py-5 rounded-2xl font-bold text-xl transition-all">
                            📞 Обадете се веднага
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-20">
                    <h2 class="section-title text-4xl md:text-5xl font-bold text-gray-900 mb-6">Свържете се с нас</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Попълнете формата за безплатна консултация и оферта
                    </p>
                </div>
                <div class="max-w-3xl mx-auto">
                    <form id="contact-form" class="bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-3xl shadow-2xl border border-gray-200">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Име *</label>
                                <input type="text" name="name" required class="form-input w-full px-5 py-4 rounded-xl bg-white" placeholder="Вашето име">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Телефон *</label>
                                <input type="tel" name="phone" required class="form-input w-full px-5 py-4 rounded-xl bg-white" placeholder="+359 87 9189 217">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-gray-700 mb-3">Имейл</label>
                            <input type="email" name="email" class="form-input w-full px-5 py-4 rounded-xl bg-white" placeholder="email@example.com">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-gray-700 mb-3">Услуга *</label>
                            <select name="service" required class="form-input w-full px-5 py-4 rounded-xl bg-white">
                                <option value="">Изберете услуга</option>
                                <option value="ceramidi">Смяна на керемиди</option>
                                <option value="verandi">Нови веранди/навеси</option>
                                <option value="konstrukcii">Иглаждане на конструкции</option>
                                <option value="izolacia">Изолация и хидроизолация</option>
                                <option value="beseski">Беседки и други</option>
                                <option value="uluci">Смяна на улуци</option>
                                <option value="drugo">Друго</option>
                            </select>
                        </div>
                        <div class="mb-8">
                            <label class="block text-sm font-bold text-gray-700 mb-3">Съобщение</label>
                            <textarea name="message" rows="5" class="form-input w-full px-5 py-4 rounded-xl bg-white" placeholder="Опишете вашия проект..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full text-white py-5 rounded-2xl font-bold text-xl transition-all">
                            📝 Изпитайте запитване
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-24 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Готови да започнете проекта си?</h2>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Свържете се с нас днес за безплатна консултация и оферта!</p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    <a href="tel:+359879189217" class="btn-primary text-white px-12 py-5 rounded-full font-bold text-xl transition-all">
                        📞 Звънни сега
                    </a>
                    <a href="#contact" class="bg-white hover:bg-gray-100 text-blue-900 px-12 py-5 rounded-full font-bold text-xl transition-all">
                        📝 Безплатна оферта
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-12">
                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center text-2xl">
                                🏠
                            </div>
                            <span class="text-2xl font-bold">Покривни Услуги</span>
                        </div>
                        <p class="text-gray-400 leading-relaxed mb-6">Професионални покривни услуги с гарантирано качество и достъпни цени в Бургас и цяла България.</p>
                        <div class="guarantee-badge inline-block rounded-full px-6 py-3">
                            <span class="text-white font-bold text-sm">🏆 Гаранция 10-30 години</span>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-6">Услуги</h4>
                        <ul class="space-y-3 text-gray-400">
                            <li class="hover:text-white transition-colors cursor-pointer">Смяна на керемиди</li>
                            <li class="hover:text-white transition-colors cursor-pointer">Веранди и навеси</li>
                            <li class="hover:text-white transition-colors cursor-pointer">Изолация и хидроизолация</li>
                            <li class="hover:text-white transition-colors cursor-pointer">Беседки</li>
                            <li class="hover:text-white transition-colors cursor-pointer">Смяна на улуци</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-6">Контакти</h4>
                        <ul class="space-y-3 text-gray-400">
                            <li>📞 +359 87 9189 217</li>
                            <li>📧 stoyan4619@gmail.com</li>
                            <li>📍 Бургас, България</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2024 Покривни Услуги. Всички права запазени.</p>
                </div>
            </div>
        </footer>

        <!-- Floating Call Button -->
        <a href="tel:+359879189217" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all hover:scale-110 z-50 md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
        </a>

        <script>
            // Mobile menu toggle
            document.getElementById('mobile-menu-btn').addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        // Close mobile menu if open
                        document.getElementById('mobile-menu').classList.add('hidden');
                    }
                });
            });

            // Form submission
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                const name = formData.get('name');
                const phone = formData.get('phone');
                const service = formData.get('service');
                
                alert(`Благодарим ви, ${name}! Ще се свържем с вас на ${phone} скоро относно избраната услуга.`);
                this.reset();
            });
        </script>
    </body>
</html>
