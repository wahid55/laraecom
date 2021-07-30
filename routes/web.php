<?php

use App\Models\Setting;
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


// use App\Models\Category;

// Route::get('categories/{id}/children', function ($id) {
//     $category = Category::find($id);
//     $children = $category->children;
//     return response()->json($children);
// });

// Route::get('categories/{id}/parent', function ($id) {
//     $category = Category::find($id);
//     $parent = $category->parent;
//     return response()->json($parent);
// });


// use App\Models\Attribute;
// use App\Models\AttributeValue;

// Route::get('attr/{id}/values', function ($id) {
//     $attr = Attribute::find($id);
//     $values = $attr->values;
//     return response()->json($values);
// });

// Route::get('value/{id}/attr', function ($id) {
//     $value = AttributeValue::find($id);
//     $attr = $value->attribute;
//     return response()->json($attr);
// });