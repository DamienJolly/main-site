<section class="py-12">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

    <!-- Contact Info -->
    <div class="space-y-8">
      <h2 class="text-3xl font-bold text-gray-900">Contact Information</h2>
      <p class="text-gray-600">
        Reach us via phone, email, or our contact form below. We're happy to answer your questions and provide a
        quote.
      </p>

      <div class="space-y-4">
        <div class="flex items-center gap-3 text-gray-700">
          <x-lucide-phone class="w-6 h-6 text-blue-600" />
          <a href="tel:+447376376301" class="hover:text-gray-900 transition">+44 7376 376301</a>
        </div>
        <div class="flex items-center gap-3 text-gray-700">
          <x-lucide-mail class="w-6 h-6 text-blue-600" />
          <a href="mailto:spicnspansuffolk@gmail.com"
            class="hover:text-gray-900 transition">spicnspansuffolk@gmail.com</a>
        </div>
        {{-- <div class="flex items-center gap-3 text-gray-700">
          <x-lucide-map-pin class="w-6 h-6 text-blue-600" />
          <span>Nissen Cottage, Brick Kiln Lane, Suffolk, IP12 2PB</span>
        </div> --}}
      </div>

      <div class="flex gap-4 pt-4">
        <a href="https://x.com" target="_blank" rel="noopener" aria-label="X" class="hover:text-black transition">
          <x-si-x class="w-6 h-6" />
        </a>
        <a href="https://www.facebook.com/spicnspanuk/" target="_blank" rel="noopener" aria-label="Facebook"
          class="hover:text-blue-600 transition">
          <x-si-facebook class="w-6 h-6" />
        </a>
        <a href="https://www.instagram.com/spicnspanuk/" target="_blank" rel="noopener" aria-label="Instagram"
          class="hover:text-pink-500 transition">
          <x-si-instagram class="w-6 h-6" />
        </a>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white rounded-xl shadow-2xl p-8 md:-mt-38 z-20 md:max-w-lg mx-auto w-full">

      <!-- Title -->
      <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800">
          Get in Touch
        </h2>
        <p class="text-gray-500 mt-2">
          We'd love to hear from you. Fill out the form below.
        </p>
      </div>

      <x-contact-form />
    </div>

  </div>
</section>
