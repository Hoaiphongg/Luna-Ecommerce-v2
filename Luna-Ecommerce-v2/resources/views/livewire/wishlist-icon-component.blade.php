
    <div class="col-lg-1">
        <div class="header__cart">
            <ul>
                @if (Cart::instance('wishlist')->count()>0)
                    <li><a href="#"><i class="fa fa-heart"></i> <span>{{ Cart::instance('wishlist')->count() }}</span></a></li>
                @else
                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                @endif
            </ul>
        </div>
    </div>

