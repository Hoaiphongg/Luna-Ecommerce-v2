<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class CategoryComponent extends Component
{
    use WithPagination;

    public $orderBy = 'Default Shorting';
    public $slug;

    public function store($product_id, $product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('shop.cart');
    }

    public function changeOrder($order){
        $this->orderBy = $order;
    }

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        
        if($this->orderBy == 'High To Low'){
            $products = Product::where('category_id',$category_id)->orderBy('regular_price','DESC')->paginate(12);
        }elseif($this->orderBy == 'Low To High'){
            $products = Product::where('category_id',$category_id)->orderBy('regular_price','ASC')->paginate(12);
        }elseif($this->orderBy == 'Newness'){
            $products = Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate(12);
        }else{
            $products = Product::where('category_id',$category_id)->paginate(12);
        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['products'=>$products, 'categories'=>$categories, 'category_name'=>$category_name]);
    }
}