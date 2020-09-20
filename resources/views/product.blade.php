@extends('layouts.app')
@section('content')
<img width="100" src="{{ asset('img/products/product.jpg') }}" />
{{ $product->name }} <br>
{{ $product->presentPrice() }} <br>
{{ $product->details }} <br>
{{ $product->description }} <br>
<hr>
@include('partials.might-like');
@endsection
