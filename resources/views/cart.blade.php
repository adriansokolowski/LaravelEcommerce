@extends('layouts.app')
@section('content')
@if (session()->has('success_message'))
{{ session()->get('success_message') }}
@endif

@if (Cart::count() > 0)
{{ Cart::count() }} items in shopping cart
<hr>
@foreach(Cart::content() as $item)
<div>{{ $item->model->name }}</div>
<div>{{ $item->model->details }}</div>

<a href="{{ route('shop.show', $item->model->slug) }}"><img width="100" src="{{ asset('img/products/product.jpg') }}"></img></a>
@endforeach

@else
    No items in cart!
@endif

@if (count($errors) > 0)

@foreach($errors->all as $error)
{{ $error }}
@endforeach

@endif
<hr>
@include('partials.might-like');

@endsection