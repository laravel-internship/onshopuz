<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialiteController;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailComonent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MyOrderComponent;
use App\Http\Livewire\OrderDatilComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(
    ['prefix' => \LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::any('/', HomeComponent::class)->name('home');
        Route::get('/shop/{category_id?}', ShopComponent::class)->name('shop');
        Route::get('/cart', CartComponent::class)->name('cart')->middleware('authcheck');
        Route::get('/detail/{slug}', DetailComonent::class)->name('detail');
        Route::get('/contact', ContactComponent::class)->name('contact');
        Route::get('/checkout/{order_id}', CheckoutComponent::class)->name('checkout');
        Route::get('/thankyou/{order_id}', ThankyouComponent::class)->name('thankyou');
        Route::get('/review/{order_detail_id}', \App\Http\Livewire\ReviewComponent::class)->name('review');
        Route::get('myorder/', MyOrderComponent::class)->name('myorder')->middleware('authcheck');
        Route::get('orderdatil/{order_id}', OrderDatilComponent::class)->name('orderdatil')->middleware('authcheck');
        Route::get('wishlist/',WishlistComponent::class)->name('wishlist')->middleware('authcheck');

        Route::get('/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
        Route::get('/google/callback', [SocialiteController::class, 'callback']);

        Route::group(['prefix' => 'admin/', 'middleware' => ['auth']], function () {
            Route::get('products',[ ProductController::class, 'index'])->name('product');
        });
    }

);
