<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminCouponComponent extends Component
{
    public function DeleteCategory($id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        session()->flash('message','Coupon has been Deleted Successfully!');
    }
    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.admin-coupon-component',['coupons'=>$coupons]);
    }
}