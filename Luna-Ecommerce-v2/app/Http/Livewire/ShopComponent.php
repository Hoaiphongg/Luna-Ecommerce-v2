<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;

    public $orderBy = 'Default Shorting';
    public $min_price = 0;
    public $max_price = 1000;


    public function store($product_id, $product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('shop.cart');
    }

    public function changeOrder($order){
        $this->orderBy = $order;
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
        if($this->orderBy == 'High To Low'){
            $products = Product::whereBetween('regular_price',[$this->min_price, $this->max_price])->orderBy('regular_price','DESC')->paginate(12);
        }elseif($this->orderBy == 'Low To High'){
            $products = Product::whereBetween('regular_price',[$this->min_price, $this->max_price])->orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->orderBy == 'Newness'){
            $products = Product::whereBetween('regular_price',[$this->min_price, $this->max_price])->orderBy('created_at','DESC')->paginate(12);
        }else{
            $products = Product::whereBetween('regular_price',[$this->min_price, $this->max_price])->paginate(12);
        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.shop-component',['products'=>$products, 'categories'=>$categories]);
    }
}