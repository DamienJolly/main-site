<section class="py-20 bg-gray-50 text-gray-800">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-semibold mb-16">Meet Our Team</h2>
    <div class="grid md:grid-cols-3 gap-12">
      @foreach ($members as $member)
        <div class="text-center group">
          <img src="{{ $member['photo'] }}" alt="{{ $member['name'] }}"
            class="mx-auto size-46 object-cover rounded-full mb-4">
          <h3 class="font-bold text-xl group-hover:text-blue-600">{{ $member['name'] }}</h3>
          <p class="text-gray-600 mb-1">{{ $member['role'] }}</p>
          <p class="text-gray-500 text-sm">{{ $member['bio'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
