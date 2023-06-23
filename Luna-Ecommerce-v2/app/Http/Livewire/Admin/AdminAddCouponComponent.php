<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminAddCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;

    public function storeCoupon(){
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;

        $coupon->save();
        session()->flash('message','Coupon has been Created successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-coupon-component');
    }
}