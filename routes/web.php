<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RightSidebarDataFetch;
use App\Models\User;
use App\Models\Expense;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardGraphDataFetch;
use Illuminate\Support\Carbon;

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

Route::get('/', function(){return view('welcome');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/Logout', [AuthenticatedSessionController::class, 'destroy'])->name('Logout');
});


Route::get('/DashboardGraphDataFetch.php',DashboardGraphDataFetch::class);
Route::get('/RightSidebarDataFetch.php',RightSidebarDataFetch::class);

require __DIR__.'/auth.php';
