<h1>Checkout</h1>
<a href="{{ route('cart.index') }}">Back to cart</a>
<h2>Choosen items to buy</h2>
<div>
    @foreach(Cart::content() as $item)
    <img width="100" src="{{ asset('img/products/product.jpg') }}" />
    <p>{{ $item->name }}</p>
    <p>{{ presentPrice($item->price) }}</p>
    <p>{{ $item->details }}</p>
    @endforeach
</div>
<div>
    <p>Total: {{ presentPrice(Cart::total()) }}</p>
    <p>Tax: {{ presentPrice(Cart::tax()) }}</p>
    <p>Subtotal: {{ presentPrice(Cart::subtotal()) }}</p>
</div>