<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact/submit', 'ContactController@submit'
//function () {
  //  return Request::All(); //dd(обьект) выведет все в виде массива
//}
)->name('contactForm');
Route::get(
    '/contact/all',
    'ContactController@allData'
    )->name('contact-data');

Route::get(
    '/contact/all/{id}',
    'ContactController@showFullMessage'
    )->name('contact-data-full');

Route::get(
        '/contact/all/{id}/update',
        'ContactController@updateMessage'
        )->name('contact-update');

Route::post(
    '/contact/all/{id}/update',
    'ContactController@updateMessageSubmit'
    )->name('contact-update-submit');

    Route::get(
        '/contact/all/{id}/delete',
        'ContactController@deleteMessage'
        )->name('contact-delete');

