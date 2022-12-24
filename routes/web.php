<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BookDisplayController;

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

// BOOK DETAIL PAGE
// open page for a specific book
Route::get('/book-detail/{isbn}', [BookController::class, 'index'])->name('book-detail');

// CART PAGE
Route::get('/cart', [CartController::class, 'index'])->name('cart');
// to insert new item into cart
Route::post('/add-cart', [CartController::class, 'store']);
// to edit the quantity of item
Route::post('/edit-cart', [CartController::class, 'edit']);
// to remove item from cart
Route::post('/delete-item', [CartController::class, 'destroy']);

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


// **  BOOK DSIPLAY PAGES  **
// SEARCH BAR 
Route::post('/search', [BookDisplayController::class, 'search'])->name('search');

// FILTER IN BOOK DISPLAY
// Route::get('/filter', [BookDisplayController::class, 'filter'])->name('filter');
Route::post('/filter', [BookDisplayController::class, 'filter'])->name('filter');

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

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/shipping-delivery', function () {
    return view('shipping-delivery');
})->name('ShippingandDelivery');
Route::get('/adminhome', function () {
    return view('adminhome');
})->name('adminhome');

Route::get('/editbook', function () {
    return view('editbook');
})->name('editbook');

Route::get('/addbook', function () {
    return view('addbook');
})->name('addbook');
