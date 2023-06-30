<?php

use App\Http\Controllers\Backend\RoleController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DouSimpleController;
use App\Http\Controllers\Backend\DouAdvancedController;
use App\Http\Controllers\Backend\DouDetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DouApiController;

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

$escavador = new \App\Http\Providers\EscavadorProvider();

Route::get('/test', function() use ($escavador) {
    return $escavador->busca('Pablo Quermes Papalardo');
});

Route::get('/test/{diarioId}', function($diarioId) use ($escavador) {
    $diario = $escavador->buscaDiario($diarioId);
    return $diario;
    return $diario['paginas']['items']['conteudo'];
});

Route::get('/', function () {
    return view('auth.login');
});



require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users',UserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('simple', DouSimpleController::class);
    Route::resource('advanced',DouAdvancedController::class);
    Route::resource('details',DouDetailsController::class);

    Route::get('api',[DouApiController::class]);

});
