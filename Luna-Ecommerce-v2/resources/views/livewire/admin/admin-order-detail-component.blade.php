<div>
    <section class="shoping-cart spad">
        <div class="container">
            <button type="button" class="btn btn-secondary btn-icon-text">
                <a href="{{ route('admin.orders')}}" style="text-decoration: none; color: black">Back To Orders Management</a>
                <i class="ti-file btn-icon-append"></i>                          
              </button>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="shoping__cart__table">
                        <table>                                    
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" height="200px" width="200px" alt="{{ $item->product->name }}">
                                            <h5>{{ $item->product->name }}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{ $item->price }}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            {{$item->quantity}}
                                        </td>
                                        <td class="shoping__cart__total">
                                            {{ $item->price * $item->quantity }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__total">Subtotal <span>{{ $order->subtotal }}</span></div>
                            <div class="checkout__order__total">Total <span>{{ $order->total }}</span></div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name: <span>{{ $order->firstname }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name: <span>{{ $order->lastname }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Country: <span>{{ $order->contry }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Provine: <span>{{ $order->provine }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Town/City: <span>{{ $order->city }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode / ZIP: <span>{{ $order->zipcode }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 1: <span>{{ $order->line1 }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 2: <span>{{ $order->line2 }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone: <span>{{ $order->mobile }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email: <span>{{ $order->email }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
                @if($order->is_shipping_different)
                <h4>Shipping Detail</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name: <span>{{ $order->shipping->firstname }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name: <span>{{ $order->shipping->lastname }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Country: <span>{{ $order->shipping->contry }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Provine: <span>{{ $order->shipping->provine }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Town/City: <span>{{ $order->shipping->city }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode / ZIP: <span>{{ $order->shipping->zipcode }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 1: <span>{{ $order->shipping->line1 }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 2: <span>{{ $order->shipping->line2 }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone: <span>{{ $order->shipping->mobile }}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email: <span>{{ $order->shipping->email }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
                @endif
                <h4>Transaction</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Transaction Mode: <span>{{ $order->transaction->mode }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Status: <span>{{ $order->transaction->status }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Date: <span>{{ $order->transaction->created_at }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
