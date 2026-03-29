@php
  $testimonials = [
      [
          'name' => 'Pip A.',
          'role' => 'Homeowner',
          'photo' => asset('images/team/default-man.jpg'),
          'content' => 'Excellent service and would definitely recommend. Our cleaner is superb.',
      ],
      [
          'name' => 'Sarah B.',
          'role' => 'Homeowner',
          'photo' => asset('images/team/default-girl.jpg'),
          'content' =>
              'Rose has been cleaning at our home for many months now on a fortnightly basis. She is very reliable and is  always willing to do extra if needed. Coming home after she has been is lovely! Having everything spotless and in its place 🥰 I would personally highly recommend.',
      ],
      [
          'name' => 'Box Worx Ltd.',
          'role' => 'Business Owner',
          'photo' => asset('images/team/default-man.jpg'),
          'content' =>
              'We are extremely pleased with the cleaning services provided at our workshop, mess room, and office areas. The team consistently maintains a high standard of cleanliness and organisation across all spaces, creating a safe and pleasant environment for everyone who works here',
      ],
  ];
@endphp

<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Section heading -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">What Our Clients Say</h2>
      <p class="text-gray-600 text-lg">Hear from the people who trust us with their homes and offices</p>
    </div>

    <!-- Testimonials grid -->
    <div class="grid md:grid-cols-3 gap-8">
      @foreach ($testimonials as $testimonial)
        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
          <div class="flex items-center mb-4">
            <img src="{{ $testimonial['photo'] }}" alt="{{ $testimonial['name'] }}"
              class="w-12 h-12 rounded-full object-cover mr-4 shadow">
            <div>
              <h3 class="font-semibold text-gray-900">{{ $testimonial['name'] }}</h3>
              <p class="text-gray-500 text-sm">{{ $testimonial['role'] }}</p>
            </div>
          </div>
          <p class="text-gray-700 italic">
            "{{ $testimonial['content'] }}"
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>
