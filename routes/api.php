<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Route53Controller;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/route53/domains', [Route53Controller::class, 'getAllDomains']);
Route::resource('/route53/domains/:domain', [Route53Controller::class, 'getDnsDetails']);
