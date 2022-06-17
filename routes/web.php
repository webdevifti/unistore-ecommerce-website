<?php

use App\Http\Controllers\site\PageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/our-blog', [PageController::class, 'blog'])->name('blog.page');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact.page');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.page');
Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog.page');
Route::get('/customer/login', [PageController::class, 'login'])->name('login.page');
Route::get('/customer/signup', [PageController::class, 'signup'])->name('signup.page');
Route::get('/cart', [PageController::class, 'cart'])->name('cart.page');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout.page');
Route::get('/faq', [PageController::class, 'faq'])->name('faq.page');
// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
