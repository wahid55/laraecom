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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';




// use App\Models\Address;
// use App\Models\User;

// Route::get('user/{id}/addresses', function ($id) {
//     $user = User::find($id);
//     $addresses = $user->addresses;
//     return response()->json($addresses);
// });

// Route::get('address/{id}/user', function ($id) {
//     $address = Address::find($id);
//     $user = $address->user;
//     return response()->json($user);
// });




// use App\Models\Admin;
// use App\Models\Shop;

// Route::get('admin/{id}/shop', function ($id) {
//     $admin = Admin::find($id);
//     $shop = $admin->shop;
//     return response()->json($shop);
// });

// Route::get('shop/{id}/admin', function ($id) {
//     $shop = Shop::find($id);
//     $admin = $shop->admin;
//     return response()->json($shop);
// });