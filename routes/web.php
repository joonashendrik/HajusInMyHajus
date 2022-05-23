<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Map;
use App\Http\Controllers\Weatherapi;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/Weather', [Weatherapi::class, 'index']);
Route::delete('/Map/{id}', [Map::class, 'delete']);
Route::get('/Map', [Map::class, 'index']);
Route::post('/Map', [Map::class, 'store']);
Route::get('/Store', [ShopController::class, 'index']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
