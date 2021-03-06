<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Models\Member;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     // All secure URL's
//     Route::get("data/{key?}", [dummyAPI::class, 'getData']);
    
//     Route::post("/add", [dummyAPI::class, 'addData']);
    
//     Route::put("/update", [dummyAPI::class, 'updateData']);
    
//     Route::delete("/delete/{id}", [dummyAPI::class, 'deleteData']);
    
//     Route::get("/search/{key}", [dummyAPI::class, 'searchData']);
    
//     Route::post("/validate", [dummyAPI::class, 'validateData']);
    
    
//     Route::apiResource("member", MemberController::class);
// });


Route::post("/login", [UserController::class, "index"]);

Route::post("/upload", [ProductController::class, 'upload']);