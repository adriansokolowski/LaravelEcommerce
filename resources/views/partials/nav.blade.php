<nav class="bg-gray-700 text-white shadow">
  <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
    <div class="flex justify-between items-center">
      <div>
        <a class="text-white text-xl font-bold md:text-2xl hover:text-gray-100" href="/">Brand</a>
      </div>

      <!-- Mobile menu button -->
      <div class="flex md:hidden">
        <button type="button" class="text-gray-500 hover:text-gray-100 focus:outline-none focus:text-gray-100" aria-label="toggle menu">
          <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div class="md:flex items-center">
      <div class="flex flex-col md:flex-row md:mx-6">
        <a class="my-1 text-sm text-white font-medium hover:text-gray-200 md:mx-4 md:my-0" href="{{ route('shop.index') }}">Strona Główna</a>
        <a class="my-1 text-sm text-white font-medium hover:text-gray-200 md:mx-4 md:my-0" href="{{ route('shop.index') }}">Produkty</a>
        <a class="my-1 text-sm text-white font-medium hover:text-gray-200 md:mx-4 md:my-0" href="{{ route('shop.index') }}">Kontakt</a>
        <a class="my-1 text-sm text-white font-medium hover:text-gray-200 md:mx-4 md:my-0" href="{{ route('shop.index') }}">O nas</a>
      </div>

      <a href="{{ route('cart.index') }}">
        <div slot="icon" class="relative">
          <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">{{ Cart::instance('default')->count() }}</div>
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg>
        </div>
      </a>
    </div>
  </div>
</nav>