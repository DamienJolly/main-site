{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @php
    $pages = [
        ['route' => 'home', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['route' => 'services', 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['route' => 'services.house-cleaning', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['route' => 'services.commercial-cleaning', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['route' => 'services.one-off-cleans', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['route' => 'about', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['route' => 'contact', 'changefreq' => 'yearly', 'priority' => '0.6'],
    ];
  @endphp
  @foreach ($pages as $page)
    <url>
      <loc>{{ route($page['route']) }}</loc>
      <changefreq>{{ $page['changefreq'] }}</changefreq>
      <priority>{{ $page['priority'] }}</priority>
    </url>
  @endforeach
</urlset>
