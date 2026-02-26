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
          <span>(123) 456-7890</span>
        </div>
        <div class="flex items-center gap-3 text-gray-700">
          <x-lucide-mail class="w-6 h-6 text-blue-600" />
          <span>info@spicnspan.com</span>
        </div>
        <div class="flex items-center gap-3 text-gray-700">
          <x-lucide-map-pin class="w-6 h-6 text-blue-600" />
          <span>123 Cleaning Street, City, Country</span>
        </div>
      </div>

      <div class="flex gap-4 pt-4">
        <a href="#" class="hover:text-black transition">
          <x-si-x class="w-6 h-6" />
        </a>
        <a href="#" class="hover:text-blue-600 transition">
          <x-si-facebook class="w-6 h-6" />
        </a>
        <a href="#" class="hover:text-pink-500 transition">
          <x-si-instagram class="w-6 h-6" />
        </a>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white rounded-3xl shadow-2xl p-8 md:-mt-38 z-20">
      <form class="space-y-6">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
          <input type="text" id="name" placeholder="Your Name"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition" />
        </div>

        <div>
          <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
          <input type="email" id="email" placeholder="you@example.com"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition" />
        </div>

        <div>
          <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
          <textarea id="message" rows="5" placeholder="Your message..."
            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-3 rounded-xl shadow hover:bg-blue-700 transition">
          Send Message
        </button>
      </form>
    </div>

  </div>
</section>
