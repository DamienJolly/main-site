<x-layouts.app title="Commercial Cleaning Suffolk & Essex | Business Cleaning Solutions"
  description="Commercial cleaning Suffolk and Essex by Spic N Span. Cleaning solutions for offices, pubs, halls, and all business premises across Suffolk and Essex. Trusted, thorough, and flexible.">
  <x-section.hero title="Commercial Cleaning"
    description="Expert commercial cleaning and business cleaning solutions for your workspace, venue, or premises." />

  <section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Service Overview</p>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
            Reliable Coverage for Working Environments
          </h2>
          <p class="text-gray-600 text-lg mb-8">
            We provide consistent commercial cleaning with minimal disruption to your team, customers, and daily
            operations. Serving businesses across Suffolk and Essex.
          </p>

          <div class="space-y-4">
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Workspaces</p>
              <p class="text-gray-600">Office, desk, and shared-area cleaning designed for daily continuity.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Washrooms & Kitchens</p>
              <p class="text-gray-600">Hygiene-focused cleaning for high-traffic facilities and touchpoints.</p>
            </div>
            <div class="pb-3 border-b border-gray-200">
              <p class="text-sm font-semibold text-gray-900 mb-1">Presentation Areas</p>
              <p class="text-gray-600">Floors, bins, and visible surfaces maintained to professional standards.</p>
            </div>
            <div>
              <p class="text-sm font-semibold text-gray-900 mb-1">Scheduling</p>
              <p class="text-gray-600">Flexible out-of-hours and routine schedules around your operations.</p>
            </div>
          </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl">
          <img src="{{ asset('images/services/commercial-cleaning.jpg') }}" alt="Commercial cleaning service"
            class="w-full h-full object-cover min-h-105">
        </div>
      </div>

      <section class="mt-16 rounded-3xl border border-gray-200 bg-gray-50 p-8 md:p-10">
        <div class="grid lg:grid-cols-5 gap-8">
          <div class="lg:col-span-2">
            <p class="text-sm font-semibold tracking-wide uppercase text-blue-600 mb-3">Business Standards</p>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Built for Professional Environments</h3>
            <p class="text-gray-600 mb-6">
              Our commercial service is designed for reliability, presentation, and operational continuity. You get
              clear scopes, predictable quality, and a team that works around your business.
            </p>

            <div class="space-y-3 text-gray-700">
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Site-specific checklists for repeatable quality standards</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Flexible scheduling across opening, closing, and off-peak hours</span>
              </div>
              <div class="flex items-start gap-3">
                <x-lucide-check class="size-5 text-blue-600 mt-0.5" />
                <span>Consistent frontline presentation for staff and visitors</span>
              </div>
            </div>
          </div>

          <div class="lg:col-span-3 grid md:grid-cols-3 gap-5">
            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">01</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Consistent Standards</h4>
              <p class="text-gray-600">Checklists and repeatable processes to keep quality high on every visit.</p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">02</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Flexible Times</h4>
              <p class="text-gray-600">Early, late, or scheduled slots around your operating hours.</p>
            </div>

            <div class="rounded-2xl border border-gray-200 bg-white p-6">
              <p class="text-xs font-semibold tracking-wide uppercase text-gray-500 mb-2">03</p>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Professional Image</h4>
              <p class="text-gray-600">Clean, welcoming environments for staff, visitors, and customers.</p>
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
