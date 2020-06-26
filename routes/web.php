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

// Index Page
Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

// Shopping Cart Page
Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shopping-cart'
]);

// Add To Cart Page
Route::get('/add-to-cart/{id}/', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

// Checkout Page
Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

// Sign Up Page
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);

// Sign In Page
Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin',
    'middleware' => 'guest'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin',
    'middleware' => 'guest'
]);

// User Profile Page
Route::get('/user/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
]);

// Logout Page
Route::get('/user/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);