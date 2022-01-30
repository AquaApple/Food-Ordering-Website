<?php

namespace App\Http\Controllers\site;
use App\Models\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $food =  Food::take(6)->orderBy('created_at', 'DESC')->get();
        return view('LandingPage.layout.index',compact('food'));
    }

    public function about()
    {
        return view('LandingPage.navbar.about');
    }
    public function contact()
    {
        return view('LandingPage.navbar.contact');
    }
}
