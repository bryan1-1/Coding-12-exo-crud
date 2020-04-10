<?php

use Illuminate\Support\Facades\Route;
;
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
Route::get('/Intros/{id}/edit','IntroController@edit');
Route::get('/', 'AllController@index')->name('main');
// Route::get('/','IntroController@index')->name('main');
// Route::get('/{id}/edit','IntroController@edit')->name('editIntro');
Route::post('/{id}/update ','IntroController@update');
//  Route::get('/','ServiceController@index')->name('main');
//  Route::get('/{id}/edit','ServiceController@edit');
//  Route::post('/{id}/update ','ServiceController@update');


 Route::post('/create/contact ','ContactController@store')->name('store');

 //database
 Route::get('/database','DataController@index');
 //intro
 Route::get('/Intros','IntroController@show');
 Route::post('/Intros/{id}/update','IntroController@update');
 Route::get('Intros/{id}/delete','IntroController@destroy');
//Service
Route::get('/Services','ServiceController@show');
Route::get('/Services/{id}/edit','ServiceController@edit');
Route::post('/Services/{id}/update','ServiceController@update');
Route::get('Services/{id}/delete','ServiceController@destroy');
//portfolios
Route::get('/Portfolios','PortfolioController@show');
Route::get('/Portfolios/{id}/edit','PortfolioController@edit');
Route::post('/Portfolios/{id}/update','PortfolioController@update');
Route::get('Portfolios/{id}/delete','ServiceController@destroy');
//Testimonial
Route::get('/Testimonials','TestimonialController@show');
Route::get('/Testimonials/{id}/edit','TestimonialController@edit');
Route::post('/Testimonials/{id}/update','TestimonialController@update');
Route::get('Testimonials/{id}/delete','TestimonialController@destroy');
//Teams
Route::get('/Teams','TeamController@show');
Route::get('/Teams/{id}/edit','TeamController@edit');
Route::post('/Teams/{id}/update','TeamController@update');
Route::get('Teams/{id}/delete','TeamController@destroy');
//Contact
Route::get('/Emails','ContactController@show');
Route::get('Emails/{id}/delete','ContactController@destroy');