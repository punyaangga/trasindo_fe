<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\jenisSampahController;
use App\Http\Controllers\api\apiJenisSampahController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dashboard', dashboardController::class);
Route::resource('/', LoginController::class);
Route::resource('/jenisSampah', jenisSampahController::class);


// Route::get('/consume-api', 'apiJenisSampahController@consumeApi');
// Route::get('/consumeJenisSampah',[apiJenisSampahController::class,'consumeApi']);
