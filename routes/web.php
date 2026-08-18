<?php

use Illuminate\Support\Facades\Route;

$services = [
    'smyana-na-keremidi' => [
        'title' => 'Смяна на керемиди',
        'image' => 'https://images.unsplash.com/photo-1635424709845-3a85ad5e1f5e?auto=format&fit=crop&w=1200&q=80',
        'gallery' => [
            'https://plus.unsplash.com/premium_photo-1683140940649-71864ae8156e?auto=format&fit=crop&w=1200&q=80',
            'https://images.unsplash.com/photo-1745478433432-0c65d929eacd?auto=format&fit=crop&w=1200&q=80',
            'https://images.unsplash.com/photo-1726589004565-bedfba94d3a2?auto=format&fit=crop&w=1200&q=80',
          
        ],
        'short_description' => 'Премахваме стари и повредени керемиди и монтираме стабилна, естетична и издръжлива покривна система.',
        'description' => 'Сменяме керемиди с внимание към устойчивостта на конструкцията, хидроизолацията и визуалния ефект на сградата. Работим с качествени материали, които предпазват покрива от влага, силни ветрове и температурни промени.',
        'features' => [
            'Проверка на носещата конструкция и подовата система.',
            'Премахване на повредени елементи без риск за сградата.',
            'Монтаж на нови керемиди и допълнителни елементи.',
            'Финална проверка и гаранция за качеството на изпълнението.',
        ],
        'benefits' => [
            'Подобрена изолация и защита от вода',
            'Повишена естетика и дълготрайност',
            'Съхраняване на структурата и устойчивост на атмосферни влияния',
        ],
    ],
    'verandi-i-navesi' => [
        'title' => 'Веранди и навеси',
        'image' => 'https://images.unsplash.com/photo-1673190889624-c1d5959289fe?auto=format&fit=crop&w=1200&q=80',
        'gallery' => [
            'https://frankfurt.apollo.olxcdn.com/v1/files/2k1h5w9mg6xk3-BG/image;s=1200x500',
            'https://interior.jilishta.com/garden/wp-content/uploads/sites/4/2018/01/verandi-pokriti-5.jpg',
            'https://remontira.bg/image/data/blog-remonti/navesi-besedki-verandi/navesi-besedki-verandi-2.JPG',
        ],
        'short_description' => 'Изграждаме функционални и елегантни веранди и навеси, които разширяват жилищното пространство и увеличават комфортa.',
        'description' => 'Всеки проект започва с проучване на пространството и нуждите на клиента. Изработваме веранди и навеси с надеждна конструкция, стабилни материали и съобразяване с архитектурния стил на къщата.',
        'features' => [
            'Проектиране според размер и функционалност на обекта.',
            'Използване на съвременни и издръжливи материали.',
            'Трайна конструкция и красиво завършване.',
            'Интегриране на осветление, врати и допълнителни елементи.',
        ],
        'benefits' => [
            'Допълнително пространство за почивка и работа',
            'Повишена стойност на имота',
            'Подходящо решение за всички сезони',
        ],
    ],
    'izgrajdane-na-konstrukcii' => [
        'title' => 'Изграждане на конструкции',
        'image' => 'https://www.pokrivi-bg.bg/wp-content/uploads/2021/04/izgrazhdane-na-nova-pokrivna-konstrukciya-12.jpg',
        'gallery' => [
            'https://boriani.bg/assets/services/large/eba18ce7b6d8c82204ccf1dc58ba299c.jpg?rand=82%0D%0A?44606',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu71cZbmv5fF8S9zCQSfMFv0jPkdZ4Z17aIayoZwiyVQBO2oqeTtCm6B8&s=10',
            'https://sglobqemi.com/wp-content/uploads/2024/12/izgrajdane-2-1-1024x768.jpg',
        ],
        'short_description' => 'Професионално стабилизираме, изравняваме и укрепваме конструкциите, за да повишим тяхната безопасност и дълготрайност.',
        'description' => 'Изграждането и укрепването на конструкции е важна част от поддържането на покривите, навесите и фасадите. Ние работим с точност, за да гарантираме стабилност, здравина и рентабилност на проекта.',
        'features' => [
            'Проверка на структурната устойчивост на покрива и елементите.',
            'Корекции и укрепване на носещата конструкция.',
            'Изравняване и стабилизиране на повърхности и щайги.',
            'Подготовка за следващи довършителни работи и защита.',
        ],
        'benefits' => [
            'Повишена безопасност и устойчивост',
            'Дълготрайна и стабилна конструкция',
            'Подобрена подготовка за монтаж и ремонт',
        ],
    ],
    'izolacia-i-hidroizolacia' => [
        'title' => 'Изолация и хидроизолация',
        'image' => 'https://sofremont.eu/wp-content/uploads/2020/06/hidroizolaciya-pokriv.jpg',
        'gallery' => [
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTACOmyHKMBvxVbwMmDSoBxpe_P56wGamk5c0eYi3q0KwFUnM3kjQ79FGQ&s=10',
            'https://ard.bg/wp-content/uploads/2022/04/waterproofing-768x512.jpg',
            'https://pokrivi-masters.com/images/pmasters/hydroizolacia-800.jpg',
        ],
        'short_description' => 'Осигуряваме надеждна защита срещу влага, топлина и загуба на топлинна енергия за по-комфортно и икономично живеене.',
        'description' => 'Подходящите изолационни и хидроизолационни решения намаляват риска от течове, кондензация и влошаване на конструкцията. Прилагаме материали с доказана ефективност и дълъг експлоатационен живот.',
        'features' => [
            'Проверка на състоянието на покрива и стените.',
            'Избор на подходящи изолационни материали.',
            'Нанасяне на хидроизолационни слоеве и уплътнения.',
            'Проверка на резултата и устойчивост на атмосферни условия.',
        ],
        'benefits' => [
            'Намаляване на загубите на топлина',
            'Предотвратяване на течове и кондензация',
            'По-дълъг живот на покривната конструкция',
        ],
    ],
    'besedki' => [
        'title' => 'Беседки и други конструкции',
        'image' => 'https://woodhouse.bg/wp-content/uploads/2023/04/Lazy-Gazebo.jpg',
        'gallery' => [
            'https://decorexpro.com/images/article/orig/2018/02/metallicheskie-besedki-dlya-dachi-vidy-konstrukcij-28.jpg',
            'https://rkem-group.com/wp-content/uploads/2023/06/%D1%80%D0%BA%D0%B5%D0%BC-%D0%B3%D1%80%D1%83%D0%BF-%D0%B1%D0%B5%D1%81%D0%B5%D0%B4%D0%BA%D0%B8-2.jpg',
            'https://rkem-group.com/wp-content/uploads/2023/06/%D1%80%D0%BA%D0%B5%D0%BC-%D0%B3%D1%80%D1%83%D0%BF-%D0%BD%D0%B0%D0%B2%D0%B5%D1%81.jpg',
        ],
        'short_description' => 'Създаваме външни пространства за почивка и забавление, с издръжливи и естетични решения за дома и градината.',
        'description' => 'Градинските беседки и декоративните конструкции съчетават функционалност, устойчивост и стил. Проектираме и изграждаме решения, които дават уют и практическа полза на всеки имот.',
        'features' => [
            'Индивидуален дизайн според пространството.',
            'Монтаж на модерни и издръжливи конструкции.',
            'Извършване на работи с внимание към детайлите.',
            'Подходящи решения за частни имоти и малки предприятия.',
        ],
        'benefits' => [
            'Красиво и функционално външно пространство',
            'Увеличаване на комфорта на дома',
            'Издръжлив дизайн за ежедневна употреба',
        ],
    ],
    'smiana-na-uluci' => [
        'title' => 'Смяна на улуци',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgVB26xZQ5gwZpQbZhE3QCVbAY4vlR7hl6o108QnLVGz9DMMLMGta54zg&s=10',
        'gallery' => [
            'https://pokriv.net/images/uluci-pokrivi.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIo3Rid10kxW-exc_YC_S8JbJ1vL19LE7Pi639br_IoQ&s=10',
            'https://realperfect-bg.com/wp-content/uploads/2023/04/montaj-postavyane-uluk.jpg',
        ],
        'short_description' => 'Монтираме и сменяме улуци, които осигуряват правилно отвеждане на водата и предпазват сградата от повреди.',
        'description' => 'Добре изграденият и поддържан улей предпазва стените, фасадата и основите от дъждовни води. Предлагаме надеждни решения за нови и ремонтирани сгради.',
        'features' => [
            'Диагностика на съществуващи повреди и течове.',
            'Избор на подходяща система според наклона на покрива.',
            'Монтаж на устойчиви и функционални улуци.',
            'Осигуряване на дълготрайна работа без протечки.',
        ],
        'benefits' => [
            'Защита на фасадата и основата',
            'Подобрена устойчивост към валежи',
            'Премахване на риска от подтопяване и повреди',
        ],
    ],
];

Route::get('/', function () use ($services) {
    return view('welcome', ['services' => $services]);
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/za-nas', 'about');
Route::view('/kontakti', 'contact');
Route::view('/uslugi', 'services.index', ['services' => $services])->name('services');

Route::get('/uslugi/{slug}', function (string $slug) use ($services) {
    abort_unless(isset($services[$slug]), 404);

    return view('services.show', ['service' => $services[$slug], 'slug' => $slug]);
})->name('service');

Route::get('/sitemap.xml', function () use ($services) {
    $baseUrl = url('/');
    $urls = [
        ['loc' => $baseUrl, 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => $baseUrl . '/about', 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => $baseUrl . '/contact', 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => $baseUrl . '/uslugi', 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
    ];

    foreach ($services as $slug => $service) {
        $urls[] = [
            'loc' => $baseUrl . '/uslugi/' . $slug,
            'lastmod' => now()->toDateString(),
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ];
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

    foreach ($urls as $url) {
        $xml .= '  <url>' . PHP_EOL;
        $xml .= '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . PHP_EOL;
        $xml .= '    <lastmod>' . htmlspecialchars($url['lastmod']) . '</lastmod>' . PHP_EOL;
        $xml .= '    <changefreq>' . htmlspecialchars($url['changefreq']) . '</changefreq>' . PHP_EOL;
        $xml .= '    <priority>' . htmlspecialchars($url['priority']) . '</priority>' . PHP_EOL;
        $xml .= '  </url>' . PHP_EOL;
    }

    $xml .= '</urlset>' . PHP_EOL;

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $content = "User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml') . "\n";

    return response($content, 200)->header('Content-Type', 'text/plain');
})->name('robots');
