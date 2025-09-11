<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Link\Models\LinkModel;
use Modules\Project\Services\DynamicRoutes;

DynamicRoutes::all('Link');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('link')->group(function () {});
});
