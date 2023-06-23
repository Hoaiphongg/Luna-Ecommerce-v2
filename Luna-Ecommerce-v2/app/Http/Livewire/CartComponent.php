<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $haveCoupon;
    public $couponCode;
    public $discount;
    public $subTotalUsingDiscount;
    public $totalUingDiscount;
    
    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-componet','refreshComponent');
    }

    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-componet','refreshComponent');
    }

    public function destroy($id){
        Cart::instance('cart')->remove($id);
        session()->flash('success_message','Item has been removed!');
        $this->emitTo('cart-icon-componet','refreshComponent');
    }

    public function clearAll(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-componet','refreshComponent');
    }
    
    public function applyCouponCode(){
        $coupon = Coupon::where('code',$this->couponCode)->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if(!$coupon){
            session()->flash('coupon_message','Invalid Coupon Code, please check your Coupon again!');
            return;
        }
        session()->put('coupon',[
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
        ]);
    }

    public function caculateDiscount(){
        if(session()->has('coupon')){
            if(session()->get('coupon')['type'] == 'fixed'){
                $this->discount = session()->get('coupon')['value'];
            }else{
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'] / 1000);
            }
            $this->subTotalUsingDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->totalUingDiscount = $this->subTotalUsingDiscount;
        }
    }

    public function removeCoupon(){
        session()->forget('coupon');
    }

    public function checkout(){
        if(Auth::check()){
            return redirect()->route('checkout');
        }else{
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout(){
        if(!Cart::instance('cart')->count() > 0){
            session()->forget('checkout');
            return;
        }

        if(session()->has('coupon')){
            session()->put('checkout',[
                'discount' => $this->discount,
                'subtotal' => $this->subTotalUsingDiscount,
                'tax' => Cart::instance('cart')->tax(),
                'total' => $this->totalUingDiscount,
            ]);
        }else{
            session()->put('checkout',[
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
    }

    public function render()
    {
        if(session()->has('coupon')){
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']){
                session()->forget('coupon');
            }else{
                $this->caculateDiscount();
            }
        }
        $this->setAmountForCheckout();
        return view('livewire.cart-component');
    }
}