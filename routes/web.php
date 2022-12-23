<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

// SIGN UP PAGE
// open sign up page
Route::get('/signup', [CustomerController::class, 'index'])->name('signup');
// submit sign up form and redirect to login via store function
Route::post('/signup', [CustomerController::class, 'store']);

// LOGIN PAGE
// open login page
Route::get('/login', [LoginController::class, 'index'])->name('login');
// authenticate user 
Route::post('/login', [LoginController::class, 'authenticate']);


// HOME PAGE
// redirect to homepage for logged in user
// Route::get('/{name}', [HomeController::class, 'index'])->name('home');

Route::get('/educative', function () {
    return view('educative-books');
})->name('educative');


// logout authenticated user
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// HOME PAGE LINKS
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Route::get('/homepage/?search={search}', function ($search) {
//     $previousSearch = True;
//     return view('homepage')->with(compact($previousSearch, $search));
// })->name('homepage');

// SEARCH BAR IN THE HEADER
Route::post('/search', [HomeController::class, 'search'])->name('search');

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

Route::get('/exchange-refund', function () {
    return view('exchange-refund');
})->name('exchange-refund');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/TermsandConditions', function () {
    return view('Terms-Conditions');
})->name('Terms-Conditions');

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

Route::get('/shipping-delivery', function () {
    return view('shipping-delivery');
})->name('ShippingandDelivery');

