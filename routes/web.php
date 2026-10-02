<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['services' => config('site.services')]);
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/za-nas', 'about');
Route::view('/kontakti', 'contact');
Route::view('/galeria', 'gallery')->name('gallery');

Route::get('/uslugi', function () {
    return view('services.index', ['services' => config('site.services')]);
})->name('services');

Route::get('/uslugi/{slug}', function (string $slug) {
    $services = config('site.services');
    abort_unless(isset($services[$slug]), 404);

    return view('services.show', [
        'service' => $services[$slug],
        'slug' => $slug,
        'services' => $services,
    ]);
})->name('service');

Route::get('/sitemap.xml', function () {
    $baseUrl = url('/');
    $today = now()->toDateString();
    $urls = [
        ['loc' => $baseUrl, 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => $baseUrl . '/uslugi', 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => $baseUrl . '/galeria', 'changefreq' => 'weekly', 'priority' => '0.8'],
        ['loc' => $baseUrl . '/about', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => $baseUrl . '/contact', 'changefreq' => 'monthly', 'priority' => '0.8'],
    ];

    foreach (array_keys(config('site.services')) as $slug) {
        $urls[] = ['loc' => $baseUrl . '/uslugi/' . $slug, 'changefreq' => 'monthly', 'priority' => '0.8'];
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

    foreach ($urls as $url) {
        $xml .= '  <url>' . PHP_EOL;
        $xml .= '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . PHP_EOL;
        $xml .= '    <lastmod>' . $today . '</lastmod>' . PHP_EOL;
        $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . PHP_EOL;
        $xml .= '    <priority>' . $url['priority'] . '</priority>' . PHP_EOL;
        $xml .= '  </url>' . PHP_EOL;
    }

    $xml .= '</urlset>' . PHP_EOL;

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $content = "User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml') . "\n";

    return response($content, 200)->header('Content-Type', 'text/plain');
})->name('robots');
