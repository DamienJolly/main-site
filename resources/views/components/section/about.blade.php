<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- Text content -->
    <div>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
        About Us
      </h2>
      <p class="text-blue-600 font-semibold mb-6">Delivering Spotless Spaces Since 2020</p>
      <p class="text-gray-700 mb-4">
        Rose & Damien started out cleaning homes and businesses themselves, and have since grown into a trusted agency
        with a friendly, reliable team of cleaners serving Suffolk and Essex
      </p>
      <p class="text-gray-700 mb-6">
        Every cleaner we work with is fully insured, experienced, and personally vetted - so you can relax knowing your
        space is in capable hands. We pride ourselves on clear, friendly communication and a flexible approach to every
        clean
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

      <x-contact-form />
    </div>

  </div>
</section>
