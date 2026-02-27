<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- Text content -->
    <div>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
        About Us
      </h2>
      <p class="text-blue-600 font-semibold mb-6">Delivering Spotless Spaces Since 2018</p>
      <p class="text-gray-700 mb-4">
        At {{ config('app.name') }}, we are dedicated to providing professional, eco-friendly cleaning solutions for
        homes and offices.
        Our experienced team focuses on attention to detail, reliability, and customer satisfaction.
      </p>
      <p class="text-gray-700 mb-6">
        From routine cleaning to specialized deep-clean services, we ensure every space we touch is spotless, safe, and
        welcoming. Our mission is simple: make your environment shine while saving you time and effort.
      </p>
      <a href="{{ route('about') }}"
        class="inline-flex items-center px-6 py-3 rounded-full
              bg-blue-600 text-white font-bold
              transition hover:bg-blue-700 hover:shadow-xl">
        Learn More
      </a>
    </div>

    <!-- Contact Form -->
    <div class="bg-white rounded-xl shadow-2xl p-8 md:-mt-42 z-20 md:max-w-lg mx-auto w-full">

      <!-- Title -->
      <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800">
          Get in Touch
        </h2>
        <p class="text-gray-500 mt-2">
          We'd love to hear from you. Fill out the form below.
        </p>
      </div>

      <form class="space-y-6">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
          <input type="text" id="name" placeholder="Your Name"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition" />
        </div>

        <div>
          <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
          <input type="email" id="email" placeholder="you@example.com"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition" />
        </div>

        <div>
          <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
          <textarea id="message" rows="5" placeholder="Your message..."
            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg shadow hover:bg-blue-700 transition">
          Send Message
        </button>
      </form>
    </div>

  </div>
</section>
