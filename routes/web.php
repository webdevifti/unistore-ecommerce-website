<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminProductBrandController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminTagController;
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
Route::get('/product/show', [PageController::class, 'singleProduct'])->name('product.page');
// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/admin-panel/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin-panel', 'as' => 'admin.'], function(){
    Route::group(['middleware' => ['AdminProtectedRoutes']], function(){
        Route::resources([
            '/manage-products' => AdminProductController::class,
            '/category' => AdminCategoryController::class,
            '/product-brands' => AdminProductBrandController::class,
            '/manage-tags' => AdminTagController::class,
        ]);

        // Product Routes
        Route::get('/manage-product/status/{id}', [AdminProductController::class, 'status'])->name('product.status');
        Route::get('/manage-product/t/{id}', [AdminProductController::class, 'destroy'])->name('product.trash');
        Route::get('/manage-product/delete/{id}', [AdminProductController::class, 'permanentDelete'])->name('product.delete');
        Route::get('/manage-product/trash/list', [AdminProductController::class, 'ProductTrashList'])->name('product.trash.list');





        // Category Route
        Route::get('/category/status/{id}', [AdminCategoryController::class, 'status'])->name('category.status');
        Route::get('/category/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('category.delete');

        // Product Brand Route
        Route::get('/product-brands/status/{id}', [AdminProductBrandController::class, 'status'])->name('brand.status');
        Route::get('/product-brands/delete/{id}', [AdminProductBrandController::class, 'destroy'])->name('brand.delete');
        
        // Product Tags Route
        Route::get('/manage-tags/status/{id}', [AdminTagController::class, 'status'])->name('tag.status');
        Route::get('/manage-tags/delete/{id}', [AdminTagController::class, 'destroy'])->name('tag.delete');
    });
});