<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailComonent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MyOrderComponent;
use App\Http\Livewire\OrderDatilComponent;
use App\Http\Livewire\PaymeComponent;
use App\Http\Livewire\ReviewComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::middleware(['auth:sanctum', 'verified','UserRole'])->get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::any('/', HomeComponent::class)->name('home');
        Route::get('/shop/{category_id?}', ShopComponent::class)->name('shop');
        Route::get('/cart', CartComponent::class)->name('cart')->middleware(['authcheck','UserRole']);
        Route::get('/detail/{slug}', DetailComonent::class)->name('detail');
        Route::get('/contact', ContactComponent::class)->name('contact');
        Route::get('/checkout/{order_id}', CheckoutComponent::class)->name('checkout');
        Route::get('/thankyou/{order_id}', ThankyouComponent::class)->name('thankyou');
        Route::get('/review/{order_detail_id}', ReviewComponent::class)->name('review');
        Route::get('myorder/', MyOrderComponent::class)->name('myorder')->middleware('authcheck');
        Route::get('orderdatil/{order_id}', OrderDatilComponent::class)->name('orderdatil')->middleware(['authcheck','UserRole']);
        Route::get('wishlist/',WishlistComponent::class)->name('wishlist')->middleware(['authcheck']);

        Route::get('payme/{order_id?}', [PaymeController::class, 'index'])->name('payme')->middleware(['authcheck','UserRole']);
        Route::post('payme/reset', [PaymeController::class, 'reset'])->name('pay.reset')->middleware(['authcheck','UserRole']);
            Route::any('payme/go', [PaymeController::class, 'cardsCreate'])->name('cardsCreate')->middleware(['authcheck','UserRole']);
            // Route::any('viewVerify/{token}', [PaymeController::class, 'viewVerify'])->name('viewVerify');
            Route::any('cardsVerify', [PaymeController::class, 'cardsVerify'])->name('cardsVerify')->middleware(['authcheck','UserRole']);


        Route::get('/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
        Route::get('/google/callback', [SocialiteController::class, 'callback']);

        Route::group(['prefix' => 'admin/', 'middleware' => ['auth','AdminRole']], function () {
            Route::get('/',[ ProductController::class, 'index'])->name('index');
            Route::get('/product',[ ProductController::class, 'product'])->name('product');
            Route::get('/create',[ ProductController::class, 'create'])->name('product.create');
            Route::post('/store',[ ProductController::class, 'store'])->name('product.store');
            Route::delete('/delete/{id}',[ ProductController::class, 'delete'])->name('product.delete');
            Route::get('/edit/{id}',[ ProductController::class, 'edit'])->name('product.edit');
            Route::put('/update/{id}',[ ProductController::class, 'update'])->name('product.update');


            Route::get('/category',[ CategoryController::class, 'index'])->name('category');
            Route::get('/category/create',[ CategoryController::class, 'create'])->name('category-create');
            Route::post('/category/store',[ CategoryController::class, 'store'])->name('category-store');
            Route::get('/category/edit/{id}',[ CategoryController::class, 'edit'])->name('category-edit');
            Route::put('/category/update/{id}',[ CategoryController::class, 'update'])->name('category-update');
            Route::delete('/category/delete/{id}',[ CategoryController::class, 'delete'])->name('category-delete');


            Route::get('/user',[ UserController::class, 'index'])->name('user');
            Route::get('/user/create',[ UserController::class, 'create'])->name('user.create');
            Route::post('/user/store',[ UserController::class, 'store'])->name('user.store');
            Route::delete('/user/delete/{id}',[UserController::class, 'delete'])->name('user.delete');
            Route::get('/user/edit/{id}',[ UserController::class, 'edit'])->name('user.edit');
            Route::put('/user/update/{id}',[ UserController::class, 'update'])->name('user.update');


            Route::get('/order',[ OrderController::class, 'index'])->name('order');
            Route::delete('/order/delete/{id}',[OrderController::class, 'delete'])->name('order.delete');
            Route::get('/order/edit/{id}',[ OrderController::class, 'edit'])->name('order.edit');
            Route::put('/order/update/{id}',[ OrderController::class, 'update'])->name('order.update');
        });
    }

);
