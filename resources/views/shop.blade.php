@extends('layouts.app')
@section('content')
<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <div class="w-full md:w-1/4 px-1 mb-4 md:mb-0">
        <div class="bg-white shadow w-full border rounded shadow-lg">
            <ul class="list-reset">
                @foreach($categories as $category)
                <li>
                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}" class="hover:bg-green-500 hover:text-white block p-2 text-grey-darker">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="w-full md:w-3/4 mb-4 md:mb-0">
        <div class="flex flex-wrap px-4">
            @foreach ($products as $product)
            <div class="group w-full sm:w-1/2 md:w-1/3 h-164 lg:w-1/3 px-3 mb-4">
                <div class="bg-white px-4 pt-4">
                    <a href="{{ route('shop.show', $product->slug) }}">
                        <img src="{{ asset('img/products/product.jpg') }}" class="w-full h-42 rounded-lg" />
                    </a>
                    <div class="flex items-center justify-center p-1">
                        @for ($i = 0; $i < 5; $i++) <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <polygon fill="#b7b7b7" points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 
			255.898,401.21 416.035,502.431 369.263,318.842" />
                            </svg>
                            @endfor
                    </div>
                    <h2 class="text-black no-underline font-bold">
                        {{ $product->name }}
                    </h2>

                    <p class="text-xs text-gray-700 leading-normal pb-8">{{ $product->details }}</p>
                    <div class="flex py-2 justify-between items-center">
                        <div class="text-2xl font-bold">8 999,-</div>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <button class="transition duration-500 ease-in-out group-hover:opacity-100 opacity-0 bg-gray-900 text-white text-xs font-bold py-2 px-4">
                                Dodaj do koszyka
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex text-xs px-4 py-1 bg-green-200">
                    <div>
                        <svg aria-hidden="true" stroke="red" fill="#f56565" data-prefix="far" data-icon="credit-card" class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
		C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
		h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
		C438.532,59.576,430.49,40.204,414.41,24.123z" /></svg></div>
                    <div>Niedostępny</div>
                </div>
            </div>
            <!-- <div class="w-2/6 -mx-4 px-4">
                <div class="bg-red-500">
                    <img class="w-full" src="{{ asset('img/products/product.jpg') }}" />
                    <div class="font-bold text-xl mb-2"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></div>
                    <p class="text-gray-700 text-base">
                        {{ $product->details }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <div class="flex justify-between items-center">
                            <div>{{ $product->presentPrice() }}</div>
                            

                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Dodaj do koszyka
                            </button>
                        </div>
                    </form>
                </div>
            </div> -->
            @endforeach
        </div>
    </div>
</div>
@endsection