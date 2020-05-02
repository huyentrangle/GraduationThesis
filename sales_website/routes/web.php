<?php

use Illuminate\Support\Facades\Route;

//frontend
Route::get('/','frontend\HomeController@getHome' );
Route::get('/about','frontend\HomeController@getAbout' );
Route::get('/contact','frontend\HomeController@getContact' );

Route::prefix('products')->group(function () {
    Route::get('detail','frontend\ProductController@getDetail' );
    Route::get('','frontend\ProductController@getProducts' );
});
Route::prefix('cart')->group(function () {
    Route::get('','frontend\CartController@showCart');
});
Route::prefix('checkout')->group(function () {
    Route::get('','frontend\CheckOutController@getCheckOut');
    Route::get('complete','frontend\CheckOutController@getComplete');
});

//admin
Route::get('login','admin\LoginController@getLogin' );
Route::post('login','admin\LoginController@Login' );

Route::prefix('admin')->group(function () {
    Route::get('home','admin\HomeController@getDashboard');
    Route::get('logout','admin\HomeController@logOut'); 

    Route::prefix('users')->group(function () {
        Route::get('','admin\UsersController@getUsers');
    
        Route::get('add','admin\UsersController@getAddUser');
        Route::post('add','admin\UsersController@addUser');
    
        Route::get('edit/{id}','admin\UsersController@getEditUser');
        Route::post('edit/{id}','admin\UsersController@editUser');
    
        Route::get('detete/{id}','admin\UsersController@deteteUser');
    });
    
    
    Route::prefix('category')->group(function () {
        Route::get('','admin\CategoryController@getCategories');
        Route::post('add','admin\CategoryController@addCategory');
    
        Route::get('edit/{id}','admin\CategoryController@getEditCategory');
        Route::post('edit/{id}','admin\CategoryController@editCategory');
    
        Route::get('detete/{id}','admin\CategoryController@deteteCategory');
    });
    
    
    Route::prefix('product')->group(function () {
        Route::get('','admin\ProductsController@getProducts');
    
        Route::get('add','admin\ProductsController@getAddProduct');
        Route::post('add','admin\ProductsController@addProduct');
    
        Route::get('edit/{id}','admin\ProductsController@getEditProduct');
        Route::post('edit/{id}','admin\ProductsController@editProduct');
    
        Route::get('detete/{id}','admin\ProductsController@deteteProduct');
    });
    
    Route::prefix('order')->group(function () {
        Route::get('','admin\OrderController@getOrder');
    
        Route::get('detail/{id}','admin\OrderController@getDetailOrder');
        Route::get('payment-orders/{id}','admin\OrderController@paymentOrders');
    
        Route::get('processed','admin\OrderController@processed');
    });
});



