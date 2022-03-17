<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Auth;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Notification;
use App\Http\Livewire\Inbox;
use App\Http\Livewire\LetterIndex;
use App\Http\Livewire\CapacityBuildings;
use App\Http\Livewire\Exchange;
use App\Http\Livewire\News;
use App\Http\Livewire\TranscriptApplication;
use App\Http\Livewire\SecondarySupervisor;

use App\Http\Livewire\Admin\AdminLogin;

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

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


//ROUTE FOR STUDENT
Route::get('login', Auth::class)->name('login');

Route::middleware('isLoggedIn')->group(function () {

    Route::get('/', Home::class)->name('home');
    
    Route::get('notification', Notification::class)->name('notification');
    Route::get('inbox', Inbox::class)->name('inbox');
    Route::get('capacity-buildings', CapacityBuildings::class)->name('capacity-buildings');
    Route::get('exchange', Exchange::class)->name('exchange');
    Route::get('news', News::class)->name('news');
    Route::get('letter', LetterIndex::class)->name('letter');
    Route::get('secondary-supervisor', SecondarySupervisor::class)->name('secondary-supervisor');
    Route::get('transcript-application', TranscriptApplication::class)->name('transcript-application');
    Route::get('logout', [Auth::class, 'logout'])->name('logout');
    Route::get('profile', Profile::class)->name('profile');
    
});


//ROUTE FOR ADMIN
Route::get('admin/login', \App\Http\Livewire\Admin\AdminLogin::class)->name('adminlogin');

Route::middleware('adminAuth')->group(function () {

    Route::get('admin/exchange', [\App\Http\Controllers\Admin\Exchange::class, 'index'])->name('adminexchange');
    Route::get('admin/logout', [\App\Http\Livewire\Admin\AdminLogin::class, 'logout'])->name('logout');

});




