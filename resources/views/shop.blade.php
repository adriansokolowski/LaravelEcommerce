@foreach ($products as $product)
{{ $product->name }} <br>
{{ $product->presentPrice() }} <br>
{{ $product->description }} <br>
{{ $product->details }} <br>
@endforeach