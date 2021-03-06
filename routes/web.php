<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\DownloadTranscript;
use App\Http\Controllers\ReadnotifController;
use App\Http\Controllers\ValidSubmissionController;
use App\Http\Livewire\AddExchangeDestination;
use App\Http\Livewire\AddExchangeInstitution;
use App\Http\Livewire\AddSupervisor;
use App\Http\Livewire\Admin\AdminCapacityBuilding;
use App\Http\Livewire\Admin\Meta;
use App\Http\Livewire\Home;
use App\Http\Livewire\Auth;
use App\Http\Livewire\CapacityBuilding;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Notification;
use App\Http\Livewire\Inbox;
use App\Http\Livewire\InboxDetail;
use App\Http\Livewire\LetterIndex;
use App\Http\Livewire\CapacityBuildings;
use App\Http\Livewire\DetailThesis;
use App\Http\Livewire\EditExchangeInstitution;
use App\Http\Livewire\EditSubmission;
use App\Http\Livewire\Exchange;
use App\Http\Livewire\ExchangeDestination;
use App\Http\Livewire\ExchangeInstitution;
use App\Http\Livewire\News;
use App\Http\Livewire\AllNews;
use App\Http\Livewire\FormTranscriptApplication;
use App\Http\Livewire\FormSecondarySupervisor;
use App\Http\Livewire\FormLogin;
use App\Http\Livewire\InstitutionDestination;
use App\Http\Livewire\ListThesisProposal;
use App\Http\Livewire\Settings;
use App\Http\Livewire\SubmissionDetail;
use App\Http\Livewire\Supervisor;
use App\Http\Livewire\TestClass;
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
// Route::get('/', Auth::class)->name('front'); 
Route::get('login', Auth::class)->name('login');
Route::get('check-submission/{submission_id}', [ValidSubmissionController::class, 'show'])->name('check-submission')->where('submission_id', '[0-9]+');

Route::middleware('isLoggedIn')->group(function () {

    Route::get('/', Home::class)->name('home');

    Route::get('notification', Notification::class)->name('notification');
    Route::get('inbox', Inbox::class)->name('inbox');
    Route::get('inbox-detail/{id}', InboxDetail::class)->name('inboxdetail');
    Route::get('edit-submission/{submission_id}', EditSubmission::class)->where('submission_id', '[0-9]+')->name('edit-submission');
    Route::get("download", [FileController::class, 'download'])->name('download');
    Route::get("download-transcript/{id}", [DownloadTranscript::class, 'downloadPdf'])->name('download-transcript');
    Route::get("download-recommendation-passport/{id}", [DownloadTranscript::class, 'download_recommendation_passport'])->name('download_recommendation_passport');
    Route::get("download-recommendation-exchange/{id}", [DownloadTranscript::class, 'download_recommendation_exchange'])->name('download_recommendation_exchange');
    Route::get("download-letter-active-student/{id}", [DownloadTranscript::class, 'download_letter_active_student'])->name('download_letter-active-student');

    Route::get("readwp", [DownloadTranscript::class, 'readwp'])->name('readwp');

    Route::get('capacity-buildings', CapacityBuildings::class)->name('capacity-buildings');
    Route::get('capacity-building/{id}', CapacityBuilding::class)->name('form-capacity-building');
    Route::get('exchange', Exchange::class)->name('exchange');
    Route::get('outbound-exchange', \App\Http\Livewire\FormOutboundExchange::class)->name('outbound-exchange');
    Route::get('inbound-exchange', \App\Http\Livewire\FormInboundExchange::class)->name('inbound-exchange');

    Route::get('news/{id}', News::class)->name('news');
    Route::get('all-news', AllNews::class)->name('all-news');
    Route::get('letter', LetterIndex::class)->name('letter');
    Route::get('letter-recommendation-exchange', \App\Http\Livewire\FormLetterRecommendationExchange::class)->name('letter-recommendation-exchange');
    Route::get('letter-recommendation-passport', \App\Http\Livewire\FormLetterRecommendationPassport::class)->name('letter-recommendation-passport');
    Route::get('letter-active-student', \App\Http\Livewire\FormLetterActiveStudent::class)->name('letter-active-student');
    Route::get('letter-internship-program', \App\Http\Livewire\FormLetterInternshipProgram::class)->name('letter-internship-program');
    Route::get('letter-dispensation', \App\Http\Livewire\FormLetterDispensation::class)->name('letter-dispensation');


    Route::get('secondary-supervisor', FormSecondarySupervisor::class)->name('secondary-supervisor');
    Route::get('transcript-application', FormTranscriptApplication::class)->name('transcript-application');

    Route::get('logout', [FormLogin::class, 'logout'])->name('logout');
    Route::get('profile', Profile::class)->name('profile');
});


//ROUTE FOR ADMIN
Route::get('admin/login', \App\Http\Livewire\Admin\AdminLogin::class)->name('adminlogin');

Route::middleware('adminAuth')->group(function () {

    Route::get('admin', \App\Http\Livewire\Admin\AdminDashboard::class)->name('admindashboard');
    Route::get('admin/download/{filename}', [FileController::class, 'download'])->name('download-file');
    Route::get('admin/notification/{id}', [ReadnotifController::class, 'read'])->where('id', '[0-9]+')->name('read-notif');
    // Route::get('admin/dashboard', \App\Http\Livewire\Admin\AdminDashboard::class)->name('admindashboard');
    Route::get('admin/exchange', \App\Http\Livewire\Admin\AdminExchange::class)->name('adminexchange');
    Route::get('admin/exchange/{meta_id}', \App\Http\Livewire\Admin\AdminSubmissionDetail::class)->where('meta_id', '[0-9]+')->name('submission-detail');
    Route::get('admin/letter', \App\Http\Livewire\Admin\AdminLetter::class)->name('adminletter');
    Route::get('admin/transcript', \App\Http\Livewire\Admin\AdminTranscript::class)->name('admintranscript');
    Route::get('admin/secondary-supervisor', \App\Http\Livewire\Admin\AdminSecondarySupervisor::class)->name('adminsecondarysupervisor');

    Route::get('admin/capacitybuilding', AdminCapacityBuilding::class)->name('admincapacitybuilding');
    // Route::get('admin/capacitybuilding', [\App\Http\Controllers\Admin\SecondarySupervisor::class, 'index'])->name('admincapacitybuilding');
    Route::get('admin/logout', [\App\Http\Livewire\Admin\AdminLogin::class, 'logout'])->name('logout');

    Route::get('admin/exchange-institution', ExchangeInstitution::class)->name('exchange-institution');
    Route::get('admin/exchange-institution/{id}', EditExchangeInstitution::class)->where('id', '[0-9]+')->name('edit-exchange-institution');
    Route::get('admin/add-exchange-institution', AddExchangeInstitution::class)->name('add-exchange-institution');
    Route::get('admin/exchange-destination', ExchangeDestination::class)->name('exchange-destination');
    Route::get('admin/add-exchange-destination', AddExchangeDestination::class)->name('add-exchange-destination');
    Route::get('admin/supervisor', Supervisor::class)->name('supervisor');
    Route::get('admin/add-supervisor', AddSupervisor::class)->name('add-supervisor');
    // Route::post('admin/add-exchange-institution', [ExchangeInstitution::class, 'store'])->name('store-exchange');

    Route::get('admin/settings', Settings::class)->name('settings');
});

Route::middleware('spvAuth')->prefix('supervisor')->group(function () {
    Route::get('/', ListThesisProposal::class)->name('list-thesis-proposal');
    Route::get('logout', [\App\Http\Livewire\Admin\AdminLogin::class, 'logout'])->name('logout-spv');
    Route::get('detail-thesis/{submission_id}', DetailThesis::class)->where('submission_id', '[0-9]+')->name('spv-submission-detail');
    Route::get('download/{filename}', [FileController::class, 'download'])->name('spv-download-file');
});
