@extends('layouts.app')
@section('content')
@foreach ($products as $product)
<img width="100" src="{{ asset('img/products/product.jpg') }}" />
<a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a> <br>
{{ $product->presentPrice() }} <br>
{{ $product->description }} <br>
{{ $product->details }} <br>
<form action="{{ route('cart.store') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">

    <button type="submit">Add to cart</button>
</form>
@endforeach
@endsection