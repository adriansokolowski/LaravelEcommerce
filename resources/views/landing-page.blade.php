@extends('layouts.app')
@section('content')
@foreach ($products as $product)
<img width="100" src="{{ asset('img/products/product.jpg') }}" />
<a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a> <br>
{{ $product->presentPrice() }} <br>
{{ $product->description }} <br>
{{ $product->details }} <br>
@endforeach
@endsection