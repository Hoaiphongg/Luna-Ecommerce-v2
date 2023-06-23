<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function DeleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been Deleted Successfully!');
    }

    public function render()
    {
        $categories = Category::paginate(12);
        return view('livewire.admin.admin-category-component',['categories' => $categories]);
    }
}