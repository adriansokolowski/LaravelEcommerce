@extends('layouts.app')
@section('content')
@if (session()->has('success_message'))
{{ session()->get('success_message') }}
@endif

@if (count($errors) > 0)

@foreach($errors->all as $error)
{{ $error }}
@endforeach

@endif
<hr>
@include('partials.might-like');

@endsection