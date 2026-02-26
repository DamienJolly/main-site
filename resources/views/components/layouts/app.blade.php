@props([
    'heading' => null,
])

<x-layouts.base {{ $attributes }}>


  <!-- Top Bar -->
  <div class="bg-gray-100 text-sm z-10 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">

      <!-- Left: Contact Info -->
      <div class="flex flex-wrap gap-6 items-center">
        <span class="flex items-center gap-2"><x-lucide-phone class="w-5 h-5" /> (123) 456-7890</span>
        <span class="flex items-center gap-2"><x-lucide-clock class="w-5 h-5" /> Mon - Fri: 9:00 - 19:00 / Closed on
          Weekends</span>
        <span class="flex items-center gap-2"><x-lucide-mail class="w-5 h-5" /> info@spicnspan.com</span>
      </div>

      <!-- Right: Social Links -->
      <div class="flex gap-4 items-center">
        <a href="https://x.com" target="_blank" rel="noopener" aria-label="X (formerly Twitter)"
          title="X (formerly Twitter)" class="hover:text-black transition flex items-center">
          <x-si-x class="w-5 h-5" />
        </a>
        <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
          class="hover:text-blue-700 transition flex items-center">
          <x-si-facebook class="w-5 h-5" />
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"
          class="hover:text-pink-500 transition flex items-center">
          <x-si-instagram class="w-5 h-5" />
        </a>
      </div>

    </div>
  </div>

  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-2xl font-bold text-blue-600">{{ config('app.name') }}</div>

      <nav class="hidden md:flex gap-8 font-medium">
        <a href="#" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">Services</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="#" class="hover:text-blue-600">Contact</a>
      </nav>

      <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700">
        Get a Quote
      </a>
    </div>
  </header>

  {{-- <section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-4">Home Cleaning</h3>
          <p class="text-gray-600">Deep cleaning, recurring services, and move-in/out cleaning.</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-4">Office Cleaning</h3>
          <p class="text-gray-600">Professional cleaning for offices and commercial spaces.</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-4">Post-Construction</h3>
          <p class="text-gray-600">Cleanup after renovation and construction projects.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray-50 py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-12">What Clients Say</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-lg relative">
          <div
            class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl">
            💬
          </div>
          <p class="mt-12 text-gray-700 italic">“Outstanding service! Our home has never looked better.”</p>
          <div class="mt-6 font-semibold">— Sarah J.</div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-gray-900 text-gray-400 py-12">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
      <div>
        <div class="text-white font-bold text-xl mb-4">CleanCo</div>
        <p>Reliable cleaning services you can count on.</p>
      </div>

      <div>
        <h4 class="text-white font-semibold mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-white">Services</a></li>
          <li><a href="#" class="hover:text-white">About</a></li>
          <li><a href="#" class="hover:text-white">Contact</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-white font-semibold mb-4">Contact</h4>
        <p>Email: info@cleanco.com</p>
        <p>Phone: (123) 456-7890</p>
      </div>
    </div>
  </footer> --}}

  {{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <div class="container flex flex-wrap items-center justify-between mx-auto max-w-7xl px-8 h-16">
      <a href="/" class="flex items-center">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900">Spic N' Span</span>
      </a>
      <button @click="open = !open" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        aria-controls="navbar-default" :aria-expanded="open.toString()">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <div :class="{ 'block': open, 'hidden': !open }" class="hidden w-full md:block md:w-auto" id="navbar-default">
        <div class="flex items-center">
          <ul
            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0 md:bg-white">
            <li>
              <a href="/"
                class="block py-2 pl-3 pr-4 text-blue-700 bg-white rounded md:bg-transparent md:text-blue-700 md:p-0 font-semibold"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Services</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
          </ul>
          <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
            class="ml-4 text-gray-500 hover:text-blue-700 transition">
            <x-si-facebook class="w-6 h-6" />
          </a>
        </div>
      </div>
    </div>
  </nav> --}}


  {{ $slot }}

  <x-footer />
</x-layouts.base>
