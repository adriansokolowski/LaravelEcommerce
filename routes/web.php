<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SaveForLaterController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/sklep', [ShopController::class, 'index'])->name('shop.index');
Route::get('/sklep/{product}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/koszyk', [CartController::class, 'index'])->name('cart.index');
Route::post('/koszyk', [CartController::class, 'store'])->name('cart.store');
Route::delete('/koszyk/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::delete('/koszyk/', [CartController::class, 'destroyAll'])->name('cart.destroyall');
Route::post('/koszyk/switchToSaveForLater/{product}', [CartController::class, 'switchToSaveForLater'])->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', [SaveForLaterController::class, 'destroy'])->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', [SaveForLaterController::class, 'switchToCart'])->name('saveForLater.switchToCart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');