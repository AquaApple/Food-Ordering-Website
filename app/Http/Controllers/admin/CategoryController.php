<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //Store Category
    public function store_category(CategoryRequest $request)
    {
      Category::create([
        'name' => $request->name
      ]);
       $request->session()->flash('Success','New Category Saved Successfuly');
       return redirect()->route('create.category');
    }
    //Delete Category
    public function delete_category($id)
    {
      $category = Category::find($id);
      $category->delete();
      $category->food()->delete();
      session()->flash('Success','Category Has Been Deleted');
      return redirect()->route('create.category');
    }
    //Edit Category View
    public function edit_category($id)
    {
      $categories = Category::get();
      $category = Category::find($id);
      if(!$category){
      return redirect()->route('create.category');
     }
     $array = array('category' => $category);
     return view('AdminPanel.category.edit_category', compact('categories'), $array);
    }
    //Update Category
    public function update_category(CategoryRequest $request, $id)
    {
      $category = Category::find($id);
      if(!$category){
      return redirect()->route('create.category')->with('error','Category was not found');
     }
      $category->name = $request->name;
      $category->save();
      return redirect()->route('create.category')->with('Success', 'Category Edited Successfuly');

    }
    //Show Category Items
    public function show_category_items($id)
    {
      $categories = Category::get();
      $category = Category::find($id);
      $food = $category->food;
      return view('AdminPanel.category.items_category', compact('food','categories'));
    }
}
