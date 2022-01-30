<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function Login_user(Request $request)
    {
       $email =  $request->email;
       $pass = $request->password;
 
       $login =  User::select('name','email', 'password')
          ->where('email', $email)
          ->where('password', $pass)->get();
        if ($login->count() == 1) {
          foreach($login as $L)
          {
             $request->Session()->put('userName',$L->name);
             return redirect()->route('index');
          }
         
       }else{
          return redirect()->back()->with('fail','Invalid Login');
    }
    }
    //Logout
    public function logout(Request $request)
   {
      $request->Session()->flush();
      return redirect()->route('user.login.page');
   }
   //Store User Data
   public function store_user(UserRequest $request)
   {
       if($request->password != $request->repassword)
       {
        return redirect()->back()->with('fail','Password Does not match');
       }else{
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
      ]);
       $request->session()->flash('Success','Your Account Has been created Successfuly');
       return redirect()->route('user.login.page');
    }
}
   
}
