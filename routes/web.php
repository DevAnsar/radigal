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

Route::get('/', 'Home\indexController@index')->name('index');
Route::get('/product/{productSlug}','Home\productController@show')->name('productShow');

Route::post('/rating', 'Home\productController@productStar')->name('productStar')->middleware('auth');

Route::get('/basket','Home\basketController@index')->name('basketShow');
Route::post('/addtobasket','Home\basketController@addtobasket')->name('addtobasket');
Route::post('/priceRefresh','Home\basketController@priceRefresh')->name('priceRefresh');
Route::post('/basketCount','Home\basketController@basketCount')->name('basketCount');
Route::post('/deletebasket','Home\basketController@deletebasket')->name('deletebasket');

Route::get('/staircase','Home\orderController@staircase')->name('orderShow')->middleware('auth');
Route::post('/orderPriceRefresh','Home\orderController@orderPriceRefresh')->name('orderPriceRefresh');
Route::post('/staircase/pay','Home\orderController@pay')->name('orderPay');
Route::post('/staircase/orderPay','Home\orderController@payAgian')->name('orderPayAgain');
Route::get('/staircase/pay/checker','Home\orderController@checker');
Route::get('/staircase/pay/checkerAgain','Home\orderController@checkerAgain');
Route::post('/addAddress/{callback}','Home\orderController@addAddress')->name('addAddress');
Route::post('/deleteAddress','Home\orderController@deleteAddress')->name('deleteAddress');
Route::post('/discount','Home\orderController@discount')->name('discount');

Route::get('/panel','Home\panelController@index')->middleware('auth')->name('panel');
Route::post('/editdata', 'Home\panelController@editdata')->middleware('auth');

Route::get('/search/{categorySlug}/{search?}','Home\searchController@index')->name('search');
Route::post('/search','Home\searchController@search');
Route::post('/search/main','Home\searchController@searchMain')->name('searchMain');

Route::get('/sitemap','Home\sitemapController@index')->name('sitemap');
Route::get('/sitemap-products','Home\sitemapController@products');
Route::get('/feed/product','Home\feedController@products');

Route::post('/ck/upload-image','ckUploadController@upload');
Route::get('/showpage/{page}','Home\pageController@show')->name('showpage');



//login with google
Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('/addcomment', 'Home\commentController@comment')->middleware('auth');
Route::post('/commentreplay', 'Home\commentController@commentreplay')->middleware('auth');

Route::get('/user/activation/{token}', 'Home\userController@activation')->name('activation.account');


Auth::routes();

