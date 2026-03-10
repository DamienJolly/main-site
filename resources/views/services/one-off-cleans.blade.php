<x-layouts.app>
  <x-section.hero title="Optional One-Off Cleans"
    description="Thorough one-off cleans when you need a reset, seasonal refresh, or pre-event prep." />

  <section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Service Overview</p>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
            High-Impact Cleaning When You Need It Most
          </h2>
          <p class="text-gray-600 text-lg mb-8">
            Our one-off service gives your home or commercial space a detailed top-to-bottom clean without an ongoing
            commitment.
          </p>

          <div class="space-y-4">
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Seasonal Resets</p>
              <p class="text-gray-600">Deep cleaning support for spring cleans and periodic refreshes.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Event Preparation</p>
              <p class="text-gray-600">Pre-guest, pre-event, or post-event cleaning for a polished environment.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Moving Support</p>
              <p class="text-gray-600">Move-in and move-out cleaning to simplify transitions.</p>
            </div>
            <div>
              <p class="text-sm font-semibold text-gray-900 mb-1">Flexible Scope</p>
              <p class="text-gray-600">Custom service plans built around your immediate priorities.</p>
            </div>
          </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl">
          <img src="{{ asset('images/services/one-off-cleans.jpg') }}" alt="One-off cleaning service"
            class="w-full h-full object-cover min-h-105">
        </div>
      </div>

      <section class="mt-16 rounded-3xl border border-gray-200 bg-gray-50 p-8 md:p-10">
        <div class="grid lg:grid-cols-5 gap-8">
          <div class="lg:col-span-2">
            <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Service Standards</p>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">High-Impact Cleans, On Demand</h3>
            <p class="text-gray-600 mb-6">
              Our one-off cleaning option is built for flexibility and results, ideal when you need a fast reset with
              no long-term commitment.
            </p>

            <div class="space-y-3 text-gray-700">
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Detailed scope tailored to your immediate priorities</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Focused deep-clean approach for visible impact</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Flexible booking windows for urgent or planned needs</span>
              </div>
            </div>
          </div>

          <div class="lg:col-span-3 grid md:grid-cols-3 gap-5">
            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">01</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">No Ongoing Contract</h4>
              <p class="text-gray-600">Book only when needed with a clear agreed scope.</p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">02</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Detailed Finish</h4>
              <p class="text-gray-600">Extra attention to neglected and high-impact areas.</p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">03</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Fast Turnaround</h4>
              <p class="text-gray-600">Responsive booking options for urgent cleaning requirements.</p>
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
