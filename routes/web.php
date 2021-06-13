<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent ;
use App\Http\Livewire\ShopComponent ;
use App\Http\Livewire\CartComponent ;
use App\Http\Livewire\CheckoutComponent ;





Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponent::Class);
Route::get('/checkout',CheckoutComponent::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
