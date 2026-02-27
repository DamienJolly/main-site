@props([
    'showMore' => false,
])

<section class="py-20">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Section Heading -->
    @if ($showMore)
      <!-- Split Header Layout -->
      <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-16 gap-6">

        <!-- Left: Title -->
        <div class="lg:w-1/4">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
            Our Services
          </h2>
        </div>

        <!-- Middle: Description -->
        <div class="lg:w-1/2">
          <p class="text-gray-600 text-lg">
            Professional cleaning solutions for homes and commercial spaces,
            delivered with reliability and attention to detail.
          </p>
        </div>

        <!-- Right: Button -->
        <div class="lg:w-1/4 lg:text-right">
          <a href="{{ route('services') }}"
            class="inline-flex items-center px-6 py-3 rounded-full
                      bg-gray-900 text-white font-bold
                      transition hover:bg-gray-700 hover:shadow-xl">
            More Services →
          </a>
        </div>

      </div>
    @else
      <!-- Centered Header Layout -->
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">
          Our Services
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
          Professional cleaning solutions for homes and commercial spaces,
          delivered with reliability and attention to detail.
        </p>
      </div>
    @endif

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

      <a href="#"
        class="group relative block rounded-2xl overflow-hidden shadow-lg
            transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

        <!-- Image -->
        <img src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/moppers-service-1-1.jpg"
          alt="Domestic Cleaning" class="w-full h-96 object-cover transition duration-500 group-hover:scale-110">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute bottom-0 p-8 text-white">
          <h3 class="text-2xl font-semibold mb-3">
            Domestic Cleaning
          </h3>
          <p class="text-white/80">
            Regular or one-off home cleaning including kitchens, bathrooms,
            and deep sanitisation.
          </p>

          <span
            class="inline-block mt-4 font-medium underline underline-offset-4
                   transition group-hover:translate-x-1">
            Learn More →
          </span>
        </div>

      </a>

      <a href="#"
        class="group relative block rounded-2xl overflow-hidden shadow-lg
            transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

        <!-- Image -->
        <img src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/moppers-service-1-1.jpg"
          alt="Domestic Cleaning" class="w-full h-96 object-cover transition duration-500 group-hover:scale-110">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute bottom-0 p-8 text-white">
          <h3 class="text-2xl font-semibold mb-3">
            Domestic Cleaning
          </h3>
          <p class="text-white/80">
            Regular or one-off home cleaning including kitchens, bathrooms,
            and deep sanitisation.
          </p>

          <span
            class="inline-block mt-4 font-medium underline underline-offset-4
                   transition group-hover:translate-x-1">
            Learn More →
          </span>
        </div>

      </a>

      <a href="#"
        class="group relative block rounded-2xl overflow-hidden shadow-lg
            transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

        <!-- Image -->
        <img src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/moppers-service-1-1.jpg"
          alt="Domestic Cleaning" class="w-full h-96 object-cover transition duration-500 group-hover:scale-110">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute bottom-0 p-8 text-white">
          <h3 class="text-2xl font-semibold mb-3">
            Domestic Cleaning
          </h3>
          <p class="text-white/80">
            Regular or one-off home cleaning including kitchens, bathrooms,
            and deep sanitisation.
          </p>

          <span
            class="inline-block mt-4 font-medium underline underline-offset-4
                   transition group-hover:translate-x-1">
            Learn More →
          </span>
        </div>

      </a>

    </div>
  </div>
</section>
