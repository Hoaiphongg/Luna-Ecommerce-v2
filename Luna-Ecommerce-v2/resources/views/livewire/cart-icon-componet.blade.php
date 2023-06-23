
    <div class="col-lg-2">
        <div class="header__cart">
            <ul>
                @if(Cart::instance('cart')->count()>0)
                    <li><a href="{{ route('shop.cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ Cart::instance('cart')->count() }}</span></a></li>
                @else
                    <li><a href="{{ route('shop.cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ Cart::instance('cart')->count() }}</span></a></li>
                @endif
                <div class="header__cart__price">Total: <span>{{ Cart::instance('cart')->total() }}</span></div>
            </ul>
        </div>
    </div>

