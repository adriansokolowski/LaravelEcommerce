<nav class="bg-gray-900 text-gray-100 shadow">
  <div class="container mx-auto py-3 md:flex md:justify-between md:items-center">
    <div class="flex justify-between items-center">
      <div>
        <a class="text-white text-xl font-bold md:text-2xl hover:text-gray-300" href="/">Brand</a>
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
      <a href="{{ route('shop.index') }}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-red-100 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Produkty</a>
      <a href="{{ route('shop.index') }}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-red-100 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Kontakt</a>
      <a href="{{ route('shop.index') }}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-red-100 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">O nas</a>
      </div>

      <a href="{{ route('cart.index') }}">
        <div slot="icon" class="relative">
          <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">{{ Cart::instance('default')->count() }}</div>
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
            <path clip-rule="evenodd" d="M4 1L1 5v14a2 2 0 002 2h14a2 2 0 002-2V5l-3-4H4z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M1 5h18M14 9a4 4 0 01-8 0" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>
    </div>
  </div>
</nav>
<nav class="bg-green-500 text-sm text-green-100 font-bold py-3" aria-label="Breadcrumb">
  <div class="container mx-auto">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="/">Strona Główna</a>
        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" /></svg>
      </li>
      <li class="flex items-center">
        <a href="#">Produkty</a>
        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" /></svg>
      </li>
      <li>
        <a href="#" class="text-green-200" aria-current="page">Koszyk</a>
      </li>
    </ol>
  </div>
</nav>