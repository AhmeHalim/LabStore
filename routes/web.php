<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','FrontController@index')->name('home');
Route::get('/Labs','FrontController@shirts')->name('shirts');
Route::get('/shirt','FrontController@shirt')->name('shirt');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/lab/{id}','FrontController@shirtInfo');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function()
{
    Route::get('/',function()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','categoriesController');

    Route::get('orders/{type?}','OrderController@orders');
    Route::post('toggledeliver/{orderId}','OrderController@toggleDeliver')->name('toggle.deliver');

});

Route::resource('shipping','ShippingController');

Route::group(['middleware'=>'auth'],function (){
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::resource('review','ProductReviewController');

});

Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@StorePayment')->name('payment.store');



