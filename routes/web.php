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
use App\Http\Livewire\FormTranscriptApplication;
use App\Http\Livewire\FormSecondarySupervisor;
use App\Http\Livewire\FormLogin;

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
Route::get('/', Auth::class)->name('front');
Route::get('login', Auth::class)->name('login');

Route::middleware('isLoggedIn')->group(function () {

    Route::get('home', Home::class)->name('home');
    
    Route::get('notification', Notification::class)->name('notification');
    Route::get('inbox', Inbox::class)->name('inbox');
    Route::get('capacity-buildings', CapacityBuildings::class)->name('capacity-buildings');
    Route::get('exchange', Exchange::class)->name('exchange');
    Route::get('outbound-exchange', \App\Http\Livewire\FormOutboundExchange::class)->name('outbound-exchange');
    Route::get('inbound-exchange', \App\Http\Livewire\FormInboundExchange::class)->name('inbound-exchange');

    Route::get('news', News::class)->name('news');
    Route::get('letter', LetterIndex::class)->name('letter');
    Route::get('letter-recommendation-exchange', \App\Http\Livewire\FormLetterRecommendationExchange::class)->name('letter-recommendation-exchange');
    Route::get('letter-recommendation-passport', \App\Http\Livewire\FormLetterRecommendationPassport::class)->name('letter-recommendation-passport');
    Route::get('letter-active-student', \App\Http\Livewire\FormLetterActiveStudent::class)->name('letter-active-student');
    Route::get('letter-internship-program', \App\Http\Livewire\FormLetterInternshipProgram::class)->name('letter-internship-program');

    Route::get('secondary-supervisor', FormSecondarySupervisor::class)->name('secondary-supervisor');
    Route::get('transcript-application', FormTranscriptApplication::class)->name('transcript-application');
    Route::get('logout', [FormLogin::class, 'logout'])->name('logout');
    Route::get('profile', Profile::class)->name('profile');
    
});


//ROUTE FOR ADMIN
Route::get('admin', \App\Http\Livewire\Admin\AdminLogin::class)->name('adminlogin');
Route::get('admin/login', \App\Http\Livewire\Admin\AdminLogin::class)->name('adminlogin');

Route::middleware('adminAuth')->group(function () {

    Route::get('admin/dashboard', \App\Http\Livewire\Admin\AdminDashboard::class)->name('admindashboard');
    Route::get('admin/exchange', \App\Http\Livewire\Admin\AdminExchange::class)->name('adminexchange');
    // Route::get('admin/exchange/{exchangeid}', \App\Http\Livewire\Admin\AdminExchangeDetail::class)->name('adminexchangedetail');


    // Route::get('admin/dashboard', [\App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('admindashboard');
    // Route::get('admin/exchange', [\App\Http\Controllers\Admin\AdminExchange::class, 'index'])->name('adminexchange');
    // Route::get('admin/exchange/{id}', [\App\Http\Controllers\Admin\AdminExchange::class, 'show'])->name('exchangedetail');
    Route::get('admin/letter', [\App\Http\Controllers\Admin\Letter::class, 'index'])->name('adminletter');
    Route::get('admin/transcript', [\App\Http\Controllers\Admin\TranscriptApplication::class, 'index'])->name('admintranscript');
    Route::get('admin/secondarysupervisor', [\App\Http\Controllers\Admin\FormSecondarySupervisor::class, 'index'])->name('adminsecondarysupervisor');
    Route::get('admin/capacitybuilding', [\App\Http\Controllers\Admin\SecondarySupervisor::class, 'index'])->name('admincapacitybuilding');
    Route::get('admin/logout', [\App\Http\Livewire\Admin\AdminLogin::class, 'logout'])->name('logout');

});




