@foreach ($products as $product)
<a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a> <br>
{{ $product->presentPrice() }} <br>
{{ $product->description }} <br>
{{ $product->details }} <br>
@endforeach