@extends('layouts.app')
@section('content')
<div class="flex">
    <div class="w-1/5 p-4">
        <div class="bg-white shadow w-64 border rounded shadow-lg">
            <ul class="list-reset">
                <li>
                    <a href="#" class="block p-2 text-grey-darker">Category 1</a>
                </li>
                <li>
                    <a href="#" class="block p-2 text-grey-darker">Category 2</a>
                </li>
                <li>
                    <a href="#" class="block p-2 text-grey-darker">Category 3</a>
                </li>
                <li>
                    <a href="#" class="block p-2 text-grey-darker">Category 4</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-4/5 p-4">
        <div class="flex flex-wrap px-4">
            @foreach ($products as $product)
            <div class="w-2/6 rounded overflow-hidden shadow-lg">
                <div class="bg-white mx-3">
                    <div class="px-6 py-4">
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
                            <div class="flex justify-between align-center">
                                {{ $product->presentPrice() }}

                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    Dodaj do koszyka
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection