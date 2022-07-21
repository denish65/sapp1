<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\addcontroller;
use App\Http\Controllers\addproduct;

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




Route::get('/dashbord', function () {
    return view('dashbord');
});



// Route::get('/add', function () {
//     return view('add');
// });

Route::get("/add",[addcontroller::class,"index"]);

Route::post("/add",[addcontroller::class,"store"]);

Route::get("/manage",[addcontroller::class,"show"]);

Route::get('/manage/{id}',[addcontroller::class,'destroy']);

Route::get("/edit/{id}",[addcontroller::class,"edit"]);

Route::post("/edit/{id}",[addcontroller::class,"update"]);

 Route::get("/addproduct",[addproduct::class,"index"]);

 Route::post("/addproduct",[addproduct::class,"store"]);







 

 Route::get("/addproduct",[addproduct::class,"index"]);

 Route::post("/addproduct",[addproduct::class,"store"]);

 Route::get("/manageproduct",[addproduct::class,"show"]);

 Route::get("/manageproduct/{id}",[addproduct::class,"destroy"]);

 Route::get("/editproduct/{id}",[addproduct::class,"edit"]);

 Route::post("/editproduct/{id}",[addproduct::class,"update"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
