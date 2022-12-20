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
// HOME PAGE LINKS
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// Route::get('/homepage/?search={search}', function ($search) {
//     $previousSearch = True;
//     return view('homepage')->with(compact($previousSearch, $search));
// })->name('homepage');

Route::get('/educative', function () {
    return view('educative-books');
})->name('educative');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('register');

Route::get('/urdu', function () {
    return view('urdu-books');
})->name('urdu');

Route::get('/islamic', function () {
    return view('islamic-books');
})->name('islamic');

Route::get('/leisure', function () {
    return view('leisure-books');
})->name('leisure');

Route::get('/bestsellers', function () {
    return view('bestsellers-books');
})->name('bestsellers');

Route::get('/recent', function () {
    return view('recent-books');
})->name('recent');

Route::get('/shipping-returns', function () {
    return view('shipping-returns');
})->name('shipping-returns');

Route::get('/exchange-refund', function () {
    return view('exchange-refund');
})->name('exchange-refund');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/user-guide', function () {
    return view('user-guide');
})->name('user-guide');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/about-business', function () {
    return view('about-business');
})->name('about-business');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/book-detail', function () {
    return view('book-detail');
})->name('book-detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/returns', function () {
    return view('shippingandreturns');
})->name('ShippingandReturns');

