<a href="/">Homepage</a>
<a href="{{ route('shop.index') }}">Products</a>
<a href="{{ route('cart.index') }}">Shopping cart
    @if (Cart::instance('default')->count() > 0)
    <span>{{ Cart::instance('default')->count() }}</span>
    @endif
</a>

<br><br>