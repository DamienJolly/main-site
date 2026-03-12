@props([
    'darkMode' => false,
    'title' => null,
    'description' =>
        'Professional house and commercial cleaning services across Suffolk, UK. Reliable, thorough, and tailored to your needs.',
    'canonical' => null,
    'ogImage' => null,
    'robots' => 'index, follow',
])

@php
  $fullTitle = $title
      ? $title . ' | ' . config('app.name')
      : config('app.name') . ' | Professional Cleaning Services in Suffolk';
  $canonical = $canonical ?? config('app.url') . request()->getPathInfo();
  $ogImage = $ogImage ?? config('app.url') . '/images/og-image.jpg';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

  <meta name="application-name" content="{{ config('app.name') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  {{-- Primary SEO --}}
  <title>{{ $fullTitle }}</title>
  <meta name="description" content="{{ $description }}" />
  <meta name="robots" content="{{ $robots }}" />
  <link rel="canonical" href="{{ $canonical }}" />

  {{-- Open Graph --}}
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="{{ config('app.name') }}" />
  <meta property="og:title" content="{{ $fullTitle }}" />
  <meta property="og:description" content="{{ $description }}" />
  <meta property="og:url" content="{{ $canonical }}" />
  <meta property="og:image" content="{{ $ogImage }}" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:locale" content="en_GB" />

  {{-- Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ $fullTitle }}" />
  <meta name="twitter:description" content="{{ $description }}" />
  <meta name="twitter:image" content="{{ $ogImage }}" />

  {{-- JSON-LD: LocalBusiness --}}
  <script type="application/ld+json">
  {!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => config('app.name'),
    'description' => 'Professional house and commercial cleaning services across Suffolk, UK.',
    'url' => config('app.url'),
    'telephone' => '+447376376301',
    'email' => 'spicnspansuffolk@gmail.com',
    'address' => [
      '@type' => 'PostalAddress',
      'addressRegion' => 'Suffolk',
      'addressCountry' => 'GB',
    ],
    'openingHoursSpecification' => [[
      '@type' => 'OpeningHoursSpecification',
      'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
      'opens' => '09:00',
      'closes' => '19:00',
    ]],
    'sameAs' => [
      'https://www.facebook.com/spicnspanuk/',
      'https://www.instagram.com/spicnspanuk/',
    ],
    'areaServed' => [
      '@type' => 'State',
      'name' => 'Suffolk',
    ],
    'priceRange' => '££',
    'hasOfferCatalog' => [
      '@type' => 'OfferCatalog',
      'name' => 'Cleaning Services',
      'itemListElement' => [
        [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'House Cleaning' ] ],
        [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Commercial Cleaning' ] ],
        [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'One-Off Cleans' ] ],
      ],
    ],
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
  </script>

  {{-- Favicon --}}
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png?v=w1dBNxT7Wg" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png?v=w1dBNxT7Wg" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png?v=w1dBNxT7Wg" />
  <link rel="manifest" href="/favicon/site.webmanifest?v=w1dBNxT7Wg" />
  <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=w1dBNxT7Wg" color="#fdae4b" />
  <link rel="shortcut icon" href="/favicon/favicon.ico?v=w1dBNxT7Wg" />
  <meta name="msapplication-TileColor" content="#ffc40d" />
  <meta name="msapplication-config" content="/favicon/browserconfig.xml?v=w1dBNxT7Wg" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
  @livewireStyles
  @vite('resources/css/app.css')

  <!-- Scripts -->
  @livewireScripts
  @vite('resources/js/app.js')
  @stack('scripts')
</head>

<body
  class="relative min-h-screen overflow-x-clip bg-cream font-vietnam text-midnight antialiased selection:bg-stone-500/10">
  {{ $slot }}
</body>

</html>
