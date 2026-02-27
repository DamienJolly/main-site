<section class="relative bg-linear-to-r from-blue-700 via-blue-600 to-teal-600 text-white py-20 overflow-hidden -mb-6">
  <div class="max-w-7xl mx-auto px-6 pb-8">

    <h1 class="text-4xl md:text-5xl font-bold mb-6">
      {{ $title }}
    </h1>

    <p class="text-lg text-blue-100">
      {{ $description }}
    </p>

  </div>

  <!-- Decorative circles and overlay remain static -->
  <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full bg-white/10 blur-[100px]"></div>
  <div class="absolute -bottom-28 -left-28 w-md h-112 rounded-full bg-white/5 blur-[120px]"></div>
  <div class="absolute inset-0 bg-linear-to-tr from-white/5 to-transparent pointer-events-none"></div>

  <div class="absolute h-24 w-full bottom-0 -mb-1 z-10">
    <svg version="1.1" class="absolute w-full h-full overflow-hidden" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 231" preserveAspectRatio="none"
      style="enable-background:new 0 0 1366 231;" xml:space="preserve">
      <path fill="#ffffff"
        d="M0,54c0,0,106,134,307,101c246-63,285-39,368-22c106,33,225,90,292,62c109-39,255-191,399-178 c0,128,0,214,0,214H0V54z">
      </path>
      <path fill="#ffffff" style="opacity: 0.45"
        d="M-1,231h188h1178c0,0,2-104,0-214c-297,10-383,309-632,143c-39,0-122,51-325-17C172,216-1,31-1,31"></path>
      <path fill="#ffffff" style="opacity: 0.45"
        d="M1366,227c0,0,0-71.03,0-203c-198-44-439,252-559,156c-13,1,0.7-9.44-53-20c-116.23-22.86-254.55-23.5-371-17 C157,121-4,172.01-4,172.01">
      </path>
    </svg>
  </div>
</section>
