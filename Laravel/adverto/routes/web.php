<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\MyAccount;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\AdvertisementsController;

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

Route::get('/my-account', function () {
    return view('my-account');
})->middleware(['auth', 'verified'])->name('my-account');

Route::middleware('auth')->group(function () { 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('logout', [Logout::class, 'logout'])->name('logout');

Route::get('/welcome', function(){
    return view('welcome');
})->middleware(['verified'])->name('welcome');

Route::get('/create-ad', function(){
    return view('create-ad');
})->middleware(['verified'])->name('create-ad');

Route::get('/my-profile', [MyAccount::class, 'index'])->name('my-profile')->middleware('auth');

Route::get('/my-account', [MyAccount::class, 'index'])->name('my-account')->middleware('auth');

Route::get('/my-account/edit', [MyAccount::class, 'edit'])->name('my-account.edit');

Route::post('/my-account/save', [MyAccount::class, 'save'])->name('my-account.save');

Route::get('set-password', [ProviderController::class, 'showSetPasswordForm'])->name('set-password-form')->middleware('auth');

Route::post('set-password', [ProviderController::class, 'setPassword'])->name('set-password')->middleware('auth');

Route::get('login/{provider}/callback', [ProviderController::class, 'redirect'])->name('login.provider.callback');

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
 
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/ads/{categoryName}', [AdvertisementsController::class, 'showByCategory']);

Route::post('/ogloszenia', [AdvertisementsController::class, 'store']);

Route::get('/ogloszenie/{id}', [AdvertisementsController::class, 'show'])->name('advertisements.show');

Route::get('/moje-ogloszenia', [AdvertisementsController::class, 'myAdvertisements'])->name('advertisements.myAdvertisements');

Route::get('/users', [UserController:: class, 'index'])->name('users.show');

Route::get('/users/search', [UserController::class, 'userSearch'])->name('users.search');

Route::get('/users/{user}/edit', [UserController::class, 'userEdit'])->name('users.edit');

Route::middleware('admin')->get('/users', [UserController:: class, 'index']);

Route::put('/users/{user}', [UserController::class, 'userUpdate'])->name('users.update');

require __DIR__.'/auth.php';
