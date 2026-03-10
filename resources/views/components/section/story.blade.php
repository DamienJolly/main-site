<section class="py-12 bg-white text-gray-800">
  <div class="max-w-7xl mx-auto px-6">
    <div class="md:flex md:items-center md:gap-12">
      <!-- Story text -->
      <div class="md:w-1/2">
        <h2 class="text-4xl font-semibold mb-6">Our Story</h2>
        <p class="text-lg text-gray-700 mb-4">
          {{ config('app.name') }} was founded by Rose and Damien in 2020. What started as the two of us cleaning pubs
          and commercial spaces at night while also taking on house cleans during the day quickly grew into something
          much bigger.
        </p>
        <p class="text-lg text-gray-700 mb-4">
          As word spread and demand increased, we realised there was an opportunity to build a cleaning agency that
          focused not only on high standards, but also on reliability and strong communication with clients.
        </p>
        <p class="text-lg text-gray-700">
          Over time, we carefully built a friendly and hardworking team of cleaners who now support homes and businesses
          across Suffolk and Essex.
        </p>
      </div>

      <!-- Story image -->
      <div class="md:w-1/2 z-20">
        <img src="{{ asset('images/story.jpg') }}" alt="Our company story"
          class="rounded-xl shadow-lg w-full object-cover">
      </div>
    </div>

    <!-- Divider -->
    <hr class="my-12 border-gray-200">

    <!-- Values cards -->
    <div class="grid md:grid-cols-3 gap-8 mt-12 text-center">
      <div
        class="rounded-xl p-6 hover:scale-105 transition-transform bg-white/10 backdrop-blur-sm border border-white/20">
        <x-lucide-shield-check class="mx-auto mb-4 h-16 w-16 text-blue-500" />
        <h3 class="font-bold text-xl mb-2">Reliability</h3>
        <p class="text-gray-700">Always on time, always professional.</p>
      </div>

      <div
        class="rounded-xl p-6 hover:scale-105 transition-transform bg-white/10 backdrop-blur-sm border border-white/20">
        <x-lucide-cpu class="mx-auto mb-4 h-16 w-16 text-blue-500" />
        <h3 class="font-bold text-xl mb-2">Innovation</h3>
        <p class="text-gray-700">Using modern tools and techniques.</p>
      </div>

      <div
        class="rounded-xl p-6 hover:scale-105 transition-transform bg-white/10 backdrop-blur-sm border border-white/20">
        <x-lucide-users class="mx-auto mb-4 h-16 w-16 text-blue-500" />
        <h3 class="font-bold text-xl mb-2">Trust</h3>
        <p class="text-gray-700">Building long-term relationships with clients.</p>
      </div>
    </div>
  </div>
</section>
