<x-layouts.app title="House Cleaning Suffolk & Essex"
  description="Professional, reliable house cleaning in Suffolk and Essex tailored to your home and routine. Spic N Span covers kitchens, bathrooms, living areas, and more – book your cleaner today.">
  <x-section.hero title="House Cleaning"
    description="Detailed, reliable house cleaning tailored to your routine, priorities, and home." />

  <section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Scope Overview</p>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
            Structured Cleaning for Everyday Living
          </h2>
          <p class="text-gray-600 text-lg mb-8">
            Our house cleaning service is mapped around how your home is actually used, with a clear plan for
            high-traffic spaces and the details that make day-to-day life feel easier.
          </p>

          <div class="space-y-4">
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Kitchen Care</p>
              <p class="text-gray-600">Surfaces, fronts, sinks, and visible appliance exteriors.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Bathroom Hygiene</p>
              <p class="text-gray-600">Toilets, showers, basins, and high-contact points cleaned in detail.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Whole-Home Finish</p>
              <p class="text-gray-600">Dusting, vacuuming, mopping, and tidy finishing touches.</p>
            </div>
            <div>
              <p class="text-sm font-semibold text-gray-900 mb-1">Scheduling</p>
              <p class="text-gray-600">Weekly, fortnightly, or one-off visits based on your routine.</p>
            </div>
          </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl">
          <img src="{{ asset('images/services/house-cleaning.jpg') }}" alt="House cleaning service"
            class="w-full h-full object-cover min-h-105">
        </div>
      </div>

      <section class="mt-16 rounded-3xl border border-gray-200 bg-gray-50 p-8 md:p-10">
        <div class="grid lg:grid-cols-5 gap-8">
          <div class="lg:col-span-2">
            <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Service Standards</p>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Professional Care for Every Home</h3>
            <p class="text-gray-600 mb-6">
              Our residential service is built around consistency, trust, and clear communication, so every visit feels
              dependable and tailored to your priorities.
            </p>

            <div class="space-y-3 text-gray-700">
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Clear scope agreed before each clean</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Reliable scheduling with consistent quality checks</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Friendly, trusted team focused on detail and finish</span>
              </div>
            </div>
          </div>

          <div class="lg:col-span-3 grid md:grid-cols-3 gap-5">
            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">01</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Transparent Scope</h4>
              <p class="text-gray-600">Clear task lists agreed before each clean, so you always know what to expect.</p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">02</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Trusted Team</h4>
              <p class="text-gray-600">Professional, friendly cleaners focused on consistency, care, and reliability.
              </p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">03</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Simple Booking</h4>
              <p class="text-gray-600">Quick quote process and flexible appointment times that fit around your week.</p>
            </div>
          </div>
        </div>
      </section>

      <div class="mt-16 flex flex-wrap gap-4">
        <a href="{{ route('contact') }}"
          class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
          Get a Quote
        </a>
        <a href="{{ route('services') }}"
          class="inline-flex items-center px-6 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold hover:bg-gray-200 transition">
          Back to Services
        </a>
      </div>
    </div>
  </section>
</x-layouts.app>
