<?php

Route::get('/', 'HomePageController@index');

//GALLERY ROUTES
Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/{gallery}', 'GalleryController@show');

//ABOUT ROUTES
Route::get('/about', 'AboutController@index');
Route::get('/myresume', 'AboutController@resume');

//PORTFOLIO ROUTES
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/portfolio/{portfolio}', 'PortfolioController@show');
Route::get('/portfolio_category/{portfolio_category}', 'PortfolioCategoriesController@show');

//CONTACT ROUTES
Route::get('/contact', 'ContactController@index');
Route::post('/send', 'ContactController@send');


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

// Route::get('/', function () {
//     return view('welcome');
// });

