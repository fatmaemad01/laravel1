<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\ProfileController;
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

Route::get('form1',[FormsController::class,'form1'])->name('formes.form1');

Route::post('form1',[FormsController::class,'form1_data'])->name('formes.form1_data');

Route::get('welcom1',[FormsController::class,'welcom1'])->name('formes.welcom1');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('form1',[FormsController::class,'form1'])->name('formes.form1');

Route::post('form1',[FormsController::class,'form1_data'])->name('formes.form1_data');

Route::get('welcom1',[FormsController::class,'welcom1'])->name('formes.welcom1');

require __DIR__.'/auth.php';
