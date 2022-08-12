<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ActivityController;

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

/*
 * of course it's much more better to separate routes by separating route files
 * or at least put them in groups
 * but here because we have only one single route we implement it here with no groups.
 */

Route::apiResource('activity' , ActivityController::class)->only(['show']);


