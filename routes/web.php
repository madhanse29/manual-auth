<?php

use App\Models\Users;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/users', function () {
    $user=Users::orderBy('id')->get();
    return UserResource::collection($user);
});


Route::get('/users/{user}', function (Users $user ) {
    return new UserResource($user);
});

// Route::view("seek","seek");
Route::view("home","home");
Route::view("noaccess","noaccess");

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view("seek","seek");
});