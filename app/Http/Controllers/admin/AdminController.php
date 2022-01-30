<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('AdminPanel.dashboard.dashboard');
    }

    public function create_category()
    {
        $categories = Category::get();
      return view('AdminPanel.category.create_category', compact('categories'));
    }

    public function create_food()
    {
        $categories = Category::get();
        return view('AdminPanel.food.create_food', compact('categories'));
    }
    public function login_page()
    {
        return view('LoginPage.Login');
    }

    public function sign_up()
    {
        return view('LoginPage.SignUp');
    }
    
    
}
