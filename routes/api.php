<?php

use App\Http\Controllers\Api\ApartmentController;
use App\Http\Controllers\Api\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("contacts", [ContactController::class, "store"]);
Route::get("apartments",[ApartmentController::class, "index"]);
Route::get("apartments/{id}", [ApartmentController::class, "show"]);
// Get sponsored apartments
//Route::get('sponsors', [SponsorController::class, 'index'])->name('api.sponsors.index');
