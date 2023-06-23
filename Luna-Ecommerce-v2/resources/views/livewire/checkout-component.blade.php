<div>
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="{{ route('shop.cart') }}">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#" wire:submit.prevent="placeOrder">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" wire:model="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" wire:model="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Country<span>*</span></p>
                                        <input type="text" wire:model="country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Province<span>*</span></p>
                                        <input type="text" class="checkout__input__add" wire:model="provine">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Town/City<span>*</span></p>
                                        <input type="text" wire:model="city">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode / ZIP<span>*</span></p>
                                        <input type="text" wire:model="zipcode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 1<span>*</span></p>
                                        <input type="text" wire:model="line1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 2<span>*</span></p>
                                        <input type="text" wire:model="line2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" wire:model="mobile">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" wire:model="email">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc" value="1" wire:model="shipping_to_difference">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    @if ($shipping_to_difference)
                    <h4>Shipping Differcent Address</h4>
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" wire:model="s_firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" wire:model="s_lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Country<span>*</span></p>
                                        <input type="text" wire:model="s_country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Province<span>*</span></p>
                                        <input type="text" class="checkout__input__add" wire:model="s_provine">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Town/City<span>*</span></p>
                                        <input type="text" wire:model="s_city">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode / ZIP<span>*</span></p>
                                        <input type="text" wire:model="s_zipcode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 1<span>*</span></p>
                                        <input type="text" wire:model="s_line1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Line 2<span>*</span></p>
                                        <input type="text" wire:model="s_line2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" wire:model="s_mobile">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" wire:model="s_email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif   

                    <div class="col-lg-12 col-md-12">
                        <div class="checkout__order">
                            @if (Session::has('checkout'))
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach (Cart::instance('cart')->content() as $item)
                                        <li>{{ $item->model->name }}<span>{{ number_format( $item->model->regular_price * $item->qty,2)}}</span></li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Discount <span>{{ Session::get('checkout')['discount'] }}</span></div>
                                <div class="checkout__order__total">Subtotal <span>{{ Session::get('checkout')['subtotal'] }}</span></div>
                                <div class="checkout__order__total">Total <span>{{ Session::get('checkout')['total'] }}</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Cash on Delivery
                                        <input type="checkbox" value="cod" id="acc-or" wire:model="paymentModel">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Debit / Credit Card
                                        <input type="checkbox" value="card" id="payment" wire:model="paymentModel">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" value="paypal" id="paypal" wire:model="paymentModel">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endif                    
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>     
                </form>
            </div>
               
           
        </div>
    </section>
    <!-- Checkout Section End -->

</div>
