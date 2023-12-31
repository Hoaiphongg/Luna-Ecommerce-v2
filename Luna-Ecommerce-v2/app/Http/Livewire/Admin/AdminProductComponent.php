<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public function DeleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product has been Deleted Successfully!');
    }
    public function render()
    {
        $products = Product::paginate(20);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }
}