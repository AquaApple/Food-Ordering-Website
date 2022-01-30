<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Http\Requests\Requests\FoodRequest;
use App\Models\Category;
use App\Traits\FoodTrait;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    use FoodTrait;
    public function show_food()
    {
      $categories = Category::get();
      $food =  Food::get(); // SELECT * FROM Food
      return view('AdminPanel.food.food_list', compact('food','categories'));
    }
    //Store Food
    public function store_food(FoodRequest $request) 
    {
     
     if(isset($request->photo)){
      $file_name = $this->savePhoto($request->photo, 'images/foods');
      Food::create([
        'name' => $request->name,
        'price' => $request->price,
        'photo' => $file_name,
        'details' => $request->details,
        'category_id' => $request->category
      ]);

     }else{
     // Insert New Product Into DB
      Food::create([
      'name' => $request->name,
      'price' => $request->price,
      'details' => $request->details,
      'category_id' => $request->category
    
    ]);
    }
    
    return redirect()->back()->with('Success', 'Product Created Successfuly');

    }
    // Delete Food Element
    public function delete_food($id)
    {

     $food = Food::find($id);
     $food->delete();
     if($food->photo != NULL)
     {
     unlink("images/foods/$food->photo");
     }
     return redirect()->back()->with('Success', $food->name . ' Has Been Deleted');

    }
    // Edit Food Element
    public function edit_food($id)
    {
     $categories = Category::get();
     $food = Food::find($id);
     if(!$food){
      return redirect()->route('index');
     }
     $array = array('food' => $food);
     return view('AdminPanel.food.food_edit', compact('categories'), $array);
    }
    //Update Food Element
    public function update_food(FoodRequest $request, $id)
    {
      $food = Food::find($id);
     if(!$food){
      return redirect()->route('show.food')->with('error','Food Not Found');
     }
     if(isset($request->photo)){
      $file_name = $this->savePhoto($request->photo, 'images/foods');
      $food->photo = $file_name;
     }
  
      $food->name = $request->name;
      $food->price = $request->price;
      $food->details = $request->details;
      $food->category_id = $request->category;
      $food->save();
      return redirect()->route('show.food')->with('Success', 'Food Edited Successfuly');

    }
    // Create Product View
    public function create_food()
    {
        $categories = Category::get();
        return view('admin.create_product', compact('categories'));
    }
    //Ajax Search
    public function search_food(Request $request)
  {
    $data = '%' . $request->K . '%';
    $food = Food::where('name', 'like', $data)->get();
    if (isset($food) && $food->count() > 0) {
      foreach ($food as $f) {
        echo " <table id='food' class='table table-bordered'>
                <thead>
                <tr>
                  <th scope='col'>Name</th>
                  <th scope='col'>Price</th>
                  <th scope='col'>Details</th>
                </tr>
                </thead>
                <tbody>
                 <tr>
                  <td>$f->name</td>
                  <td>$f->price</td>
                  <td>$f->details</td>
                 </tr>
                </tbody>
              </table>";
      }
    } else {
      echo 'Not Found..';
    }
  }
  public function orders_show()
  {
    return view('AdminPanel.orders.order');
  }
  public function food_details($id)
  {
    $foods =  Food::get();
    $food = Food::find($id);
    
    if(!$food){
      return redirect()->route('site.home');
    }
    return view('LandingPage.navbar.details', compact('food','foods')); 
  }
}
