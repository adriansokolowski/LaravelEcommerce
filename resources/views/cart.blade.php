@extends('layouts.app')
@section('content')
<!-- Two columns -->
<div class="flex mb-4">
    <div class="w-4/6 p-4">
        @if (session()->has('success_message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-2 rounded relative" role="alert">
            <span class="block sm:inline">{{ session()->get('success_message') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
        @endif
        <div class="flex justify-between mb-2">
            <h1 class="ml-2 text-2xl font-bold">Koszyk ({{ Cart::count() }})</h1>
            <form action="{{ route('cart.destroyall') }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M8 7v12h8V7H8zM7 6h10v14H7V6z M10 5v1h4V5h-4zM9 4h6v3H9V4z M10 9h1v7h-1zM13 9h1v7h-1zM6 6h12v1H6z" /></svg>
                    <span>Wyczyść koszyk</span>
                </button>
            </form>
        </div>
        @foreach(Cart::content() as $item)
        <div class="flex border-2 justify-between items-center bg-gray-200">
            <div>
                <div class="flex items-center px-4 py-2 m-2">
                    <img class="object-contain h-12" src="{{ asset('img/products/product.jpg') }}"></img>
                    <div>{{ $item->name }}</div>
                </div>
            </div>
            <div>
                <div class="flex px-4 py-2 m-2">
                    {{ $item->model->presentPrice() }}
                    <div>
                        <input type="number" value="2" class="font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black">
                    </div>
                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-gray-700 md:ml-4">
                            <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M8 7v12h8V7H8zM7 6h10v14H7V6z M10 5v1h4V5h-4zM9 4h6v3H9V4z M10 9h1v7h-1zM13 9h1v7h-1zM6 6h12v1H6z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="w-2/6 p-4">
        <div class="p-4">
            <div class="flex justify-between border-b">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                    Kwota
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                    {{ presentPrice(Cart::subtotal()) }}
                </div>
            </div>
            <div class="flex justify-between pt-4 border-b">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                    Podatek (23%)
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                    {{ presentPrice(Cart::tax()) }}
                </div>
            </div>
            <div class="flex justify-between pt-4 border-b">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                    Łączna kwota
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                    {{ presentPrice(Cart::total()) }}
                </div>
            </div>
            <a href="{{ route('checkout.index') }}">
                <button class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-green-600 rounded-full shadow item-center hover:bg-green-700 focus:shadow-outline focus:outline-none">
                    <span class="ml-2 mt-5px">Przejdź do dostawy</span>
                    <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z" /></svg>
                </button>
            </a>
        </div>
    </div>
</div>
<!-- @if (session()->has('success_message'))
{{ session()->get('success_message') }}
@endif

@if (Cart::count() > 0)
{{ Cart::count() }} items in shopping cart
<hr>
@foreach(Cart::content() as $item)
<div>{{ $item->model->name }}</div>
<div>{{ $item->model->details }}</div>
<div>{{ $item->model->presentPrice() }}</div>
<a href="{{ route('shop.show', $item->model->slug) }}"><img width="100" src="{{ asset('img/products/product.jpg') }}"></img></a>
<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Remove</button>
</form>
<form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
    @csrf

    <button type="submit">Save for later</button>
</form>

@endforeach
<div>
    Subtotal
    {{ presentPrice(Cart::subtotal()) }}
</div>
<div>
    Tax
    {{ presentPrice(Cart::tax()) }}
</div>
<div>
    Total
    {{ presentPrice(Cart::total()) }}
</div>

@else
No items in cart!
<a href="{{ route('shop.index') }}">Continue shopping</a>
@endif

@if (Cart::instance('saveForLater')->count() > 0)
<h1>{{ Cart::instance('saveForLater')->count() }} items Saved For Later</h1>

@foreach(Cart::instance('saveForLater')->content() as $item)
<div>{{ $item->model->name }}</div>
<div>{{ $item->model->details }}</div>
<div>{{ $item->model->presentPrice() }}</div>
<a href="{{ route('shop.show', $item->model->slug) }}"><img width="100" src="{{ asset('img/products/product.jpg') }}"></img></a>
<form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Remove</button>
</form>
<form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
    @csrf

    <button type="submit">Move to cart</button>
</form>
@endforeach

@else
<div>You have no items saved for later</div>
@endif
<hr>

<div><a href="{{ route('shop.index') }}">Continue shopping</a></div>
<div><a href="{{ route('checkout.index') }}">Checkout</a></div>

@if (count($errors) > 0)

@foreach($errors->all as $error)
{{ $error }}
@endforeach

@endif
<hr>
@include('partials.might-like'); -->
@endsection