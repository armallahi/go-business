<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Kreait\Laravel\Firebase\Facades\Firebase;

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
   return redirect(route('login'));
});

Route::get('/dashboard', [CostController::class, 'getCosts'])->middleware(['authCheck'])->name('dashboard');
Route::get('/remove/{id}', [CostController::class, 'remove'])->middleware(['authCheck'])->name('remove');
Route::post('/addFile', [CostController::class, 'addFile'])->middleware(['authCheck'])->name('addFile');
Route::get('/edit/{id}', [CostController::class, 'edit'])->middleware(['authCheck'])->name('edit');
Route::post('/edit', [CostController::class, 'update'])->middleware(['authCheck'])->name('edit');

Route::get('resetPassword', [CostController::class, 'resetPassword'])->name('resetPassword');
Route::post('resetPassword', [CostController::class, 'changePassword'])->name('resetPassword');

Route::post('confirm-otp', [CostController::class, 'confirm_otp'])->name('confirm-otp');



Route::get('/add', function () {
    return view('add');
})->middleware(['authCheck'])->name('add');

Route::post('/add', [CostController::class, 'addCost'])->middleware(['authCheck'])->name('add');


Route::get('/upload', function () {
    return view('upload');
})->middleware(['authCheck'])->name('upload');


require __DIR__.'/auth.php';
