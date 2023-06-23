<div>
   <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        @if (Session::has('success_message'))
                            <div class="alter alter-success">
                                <strong>Success</strong> {{ Session::get('success_message') }}
                            </div>
                        @endif
                        @if(Cart::instance('cart')->count() > 0)
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::instance('cart')->content() as $item)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" height="200px" width="200px" alt="{{ $item->model->name }}">
                                        <h5>{{ $item->model->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $item->model->regular_price }}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</span>
                                                    <input type="text" value="{{ $item->qty }}">
                                                <span class="inc qtybtn" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{ $item->subtotal }}
                                    </td>
                                    <td class="shoping__cart__item__close" >
                                        <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        @else
                            <h1>No Item In Cart</h1>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{ route('shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right" wire:click.prevent="clearAll()"><span class="icon_close"></span>
                        Clear Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
               
                    <div class="shoping__continue">
                        <div class="checkbox">
                            <label for="#have-code"></label>
                            <input type="checkbox" name="have-code" id="have-code" value="1" wire:model="haveCoupon">
                            <span> I have a Coupon code</span>
                        </div>
                        
                            @if($haveCoupon == 1)
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                @if (Session::has('coupon_message'))
                                    <div class="alter alter-danger">
                                        <strong>Fail: </strong> {{ Session::get('coupon_message') }}
                                    </div>
                                @endif
                                <form action="#" wire:submit.prevent="applyCouponCode">
                                    <input type="text" placeholder="Enter your coupon code" wire:model="couponCode">
                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                </form>
                            </div>
                            @endif

                    </div>
                
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>{{ Cart::subtotal() }}</span></li>
                        @if (Session::has('coupon'))
                            <li>
                                <a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-close" ></i></a>
                                Discount: {{ Session::get('coupon')['code'] }}<span>{{ $discount }}</span>
                            </li>
                            <li>Subtotal With Discount <span>{{ $subTotalUsingDiscount }}</span></li>
                            <li>Total <span>{{ $totalUingDiscount }}</span></li>
                        @else
                            <li>Tax <span>{{ Cart::tax() }}</span></li>
                            <li>Total <span>{{ Cart::total() }}</span></li>
                        @endif
                    </ul>
                    <a href="#" wire:click.prevent="checkout" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

</div>
 