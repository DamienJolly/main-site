<x-layouts.app title="About Us"
  description="Learn about Spic N Span – a trusted local cleaning company serving Suffolk since 2020. Meet the team behind our professional, reliable cleaning services.">
  @php
    $teamMembers = [
        [
            'name' => 'Damien Colley',
            'role' => 'Founder & CEO',
            'photo' => asset('images/team/default-man.jpg'),
            'bio' =>
                'Founder and CEO, passionate about delivering exceptional cleaning services and building a trusted brand.',
        ],
        [
            'name' => 'Rose Mortimer',
            'role' => 'Co-Founder & Social Media Manager',
            'photo' => asset('images/team/default-girl.jpg'),
            'bio' => 'Co-founder and social media strategist, managing our online presence and client engagement.',
        ],
        [
            'name' => '[NAME]',
            'role' => 'Cleaner',
            'photo' => asset('images/team/default-girl.jpg'),
            'bio' => '[BIO]', //'Dedicated cleaning specialist known for attention to detail and consistently spotless results.',
        ],
    ];
  @endphp
  <x-section.hero title="About Us" description="Learn more about who we are and how we began." />
  <x-section.story />
  <x-section.team :members="$teamMembers" />
  <x-section.stats :projects="450" :satisfaction="100" :experience="now()->year - 2020" />
</x-layouts.app>
