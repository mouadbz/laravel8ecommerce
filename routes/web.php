<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent ;
use App\Http\Livewire\ShopComponent ;
use App\Http\Livewire\CartComponent ;
use App\Http\Livewire\CheckoutComponent ;
use App\Http\Livewire\user\UserDashboardComponent ;
use App\Http\Livewire\admin\AdminDashboardComponent ;


Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponent::Class);
Route::get('/checkout',CheckoutComponent::class);


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   // return view('dashboard');
//})->name('dashboard');
//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});


//For user or customer
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');


}); 
