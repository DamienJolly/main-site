<footer class="bg-gray-900 text-gray-400 relative overflow-hidden">
  <!-- Optional decorative blurred shapes -->
  <div class="absolute right-0 top-0 -mt-32 -mr-32 w-96 h-96 rounded-full bg-blue-600/20 blur-3xl"></div>
  <div class="absolute left-0 bottom-0 -mb-32 -ml-32 w-96 h-96 rounded-full bg-teal-500/10 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-6 py-20 relative z-10 grid md:grid-cols-3 gap-12">
    <!-- Column 1: Brand -->
    <div>
      <div class="text-white font-bold text-2xl mb-4">{{ config('app.name') }}</div>
      <p class="text-gray-400">Reliable cleaning services for homes and businesses. Fast, eco-friendly, professional.</p>
    </div>

    <!-- Column 2: Quick Links -->
    <div>
      <h4 class="text-white font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-white transition">Home</a></li>
        <li><a href="#" class="hover:text-white transition">Services</a></li>
        <li><a href="#" class="hover:text-white transition">About</a></li>
        <li><a href="#" class="hover:text-white transition">Contact</a></li>
      </ul>
    </div>

    <!-- Column 3: Contact -->
    <div>
      <h4 class="text-white font-semibold mb-4">Contact</h4>
      <p>Email: <a href="mailto:info@spicnspan.com" class="hover:text-white transition">info@spicnspan.com</a></p>
      <p>Phone: <a href="tel:1234567890" class="hover:text-white transition">(123) 456-7890</a></p>
      <p class="mt-4">Follow us:</p>
      <div class="flex gap-4 mt-2">
        <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"
          class="text-gray-500 hover:text-blue-700 transition">
          <x-si-facebook class="w-6 h-6" />
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"
          class="text-gray-500 hover:text-pink-500 transition">
          <x-si-instagram class="w-6 h-6" />
        </a>
        <a href="https://x.com" target="_blank" rel="noopener" aria-label="X"
          class="text-gray-500 hover:text-white transition">
          <x-si-x class="w-6 h-6" />
        </a>
      </div>
    </div>
  </div>

  <!-- Bottom strip -->
  <div class="border-t border-gray-700 mt-10 text-center text-gray-500 text-sm py-4">
    © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
  </div>
</footer>
