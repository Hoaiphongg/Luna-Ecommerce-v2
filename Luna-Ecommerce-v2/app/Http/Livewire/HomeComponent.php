<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    public function store($product_id, $product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('shop.cart');
    }

    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }
    
    public function removeWishlist($product_id){
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');

                return;
            }
        }
    }
    
    public function render()
    {
        $coupons = Coupon::orderBy('created_at', 'DESC')->get();
        $categories = Category::orderBy('name','ASC')->get();
        $lsproduct = Product::orderBy('created_at','DESC')->get()->take(3);
        $featured = Product::Where('featured','=',1)->orderBy('created_at','DESC')->get()->take(12);
        $saleProduct = Product::Where('sale_price','>',0)->orderBy('sale_price','DESC')->get()->take(3);
        return view('livewire.home-component',['lsproduct'=>$lsproduct, 'saleProduct'=>$saleProduct, 'categories'=>$categories, 'featured'=>$featured,'coupons'=>$coupons]);
    }
}