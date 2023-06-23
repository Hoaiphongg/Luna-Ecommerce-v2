<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class SearchComponent extends Component
{
    use WithPagination;

    public $orderBy = 'Default Shorting';
    public $q;
    public $search_term;

    public function mount(){
        $this->fill(request()->only('q'));
        $this->search_term = '%'.$this->q .'%';
    }

    public function store($product_id, $product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('shop.cart');
    }

    public function changeOrder($order){
        $this->orderBy = $order;
    }
    
    public function render()
    {
        if($this->orderBy == 'High To Low'){
            $products = Product::where('name','like',$this->search_term)->orderBy('regular_price','DESC')->paginate(12);
        }elseif($this->orderBy == 'Low To High'){
            $products = Product::where('name','like',$this->search_term)->where('name','like',$this->search_term)->orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->orderBy == 'Newness'){
            $products = Product::where('name','like',$this->search_term)->where('name','like',$this->search_term)->orderBy('created_at','DESC')->paginate(12);
        }else{
            $products = Product::where('name','like',$this->search_term)->paginate(12);
        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.search-component',['products'=>$products, 'categories'=>$categories]);
    }
}