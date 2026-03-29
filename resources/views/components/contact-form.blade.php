@if (session('success'))
  <div class="mb-4 p-4 rounded bg-green-100 text-green-800 border border-green-200">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="mb-4 p-4 rounded bg-red-100 text-red-800 border border-red-200">
    <ul class="list-disc pl-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
  @csrf
  <div>
    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
    <input type="text" id="name" name="name" required placeholder="Your Name" value="{{ old('name') }}"
      class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition @error('name') border-red-400 @enderror" />
  </div>
  <div>
    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
    <input type="email" id="email" name="email" required placeholder="you@example.com"
      value="{{ old('email') }}"
      class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition @error('email') border-red-400 @enderror" />
  </div>
  <div>
    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
    <textarea id="message" name="message" required rows="5" placeholder="Your message..."
      class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-600 focus:outline-none transition @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
  </div>
  <button type="submit"
    class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg shadow hover:bg-blue-700 transition">
    Send Message
  </button>
</form>
