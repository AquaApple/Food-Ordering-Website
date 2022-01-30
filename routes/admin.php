<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\siteController;
use GuzzleHttp\Middleware;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin' , 'middleware' => 'Prevent'], function () {
 
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/show','FoodController@show');
  /*=================================  Begin Food Routes  =================================*/
    Route::get('/create-food', 'AdminController@create_food')->name('create.food');
    Route::post('/create-food', 'FoodController@store_food')->name('store.food');
    Route::get('/food-list', 'FoodController@show_food')->name('show.food');
    Route::get('/food-delete/{id}', 'FoodController@delete_food')->name('food.delete');
    Route::get('/edit-food/{id}', 'FoodController@edit_food')->name('edit.food');
    Route::post('/edit-food/{id}', 'FoodController@update_food')->name('update.food');
    Route::post('/search-food', 'FoodController@search_food')->name('search.food');
    Route::get('/orders', 'FoodController@orders_show')->name('orders.food');
    
   /*=================================  End Food Routes  =================================*/
   Route::get('/category', 'AdminController@create_category')->name('create.category');
   Route::post('/category', 'CategoryController@store_category')->name('store.category');
   Route::get('/category-delete/{id}', 'CategoryController@delete_category')->name('category.delete');
   Route::get('/category-edit/{id}', 'CategoryController@edit_category')->name('category.edit');
   Route::post('/category-edit/{id}', 'CategoryController@update_category')->name('category.update');
   Route::get('/category-food/{id}', 'CategoryController@show_category_items')->name('category.show.food');
   Route::get('/logout', 'LoginController@logout')->name('user.signout');
   /*=================================  Begin Categories Routes  =================================*/
  });
   /*=================================  Begin Login Routes  =================================*/
   Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
   Route::get('/login', 'AdminController@login_page')->name('user.login.page');
   Route::post('/login', 'LoginController@Login_user')->name('user.login');
   Route::get('/food-details/{id}','FoodController@food_details')->name('details.food');

   /*=================================  End Login Routes  =================================*/

   /*=================================  Begin Sign up Routes  =================================*/
   Route::get('/sign-up', 'AdminController@sign_up')->name('user.signup');
   Route::post('/sign-up', 'LoginController@store_user')->name('user.store');
   
  });

