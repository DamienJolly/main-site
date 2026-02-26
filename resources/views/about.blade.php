<x-layouts.app>
  @php
    $teamMembers = [
        [
            'name' => 'Damien Colley',
            'role' => 'CEO',
            'photo' => 'https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/team4.jpg',
            'bio' => 'Founder with 15 years experience.',
        ],
        [
            'name' => 'Rose Mortimer',
            'role' => 'Operations Manager',
            'photo' => 'https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/team4.jpg',
            'bio' => 'Ensures projects run smoothly.',
        ],
        [
            'name' => 'Luke Smith',
            'role' => 'Lead Cleaner',
            'photo' => 'https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/team4.jpg',
            'bio' => 'Expert in residential cleaning.',
        ],
    ];
  @endphp
  <x-section.hero title="About Us" description="Learn more about our company and values." />
  <x-section.story />
  <x-section.team :members="$teamMembers" />
  <x-section.stats :projects="500" :satisfaction="100" :experience="7" />
</x-layouts.app>
