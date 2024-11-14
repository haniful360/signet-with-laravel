<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\quote\QuoteController;
use App\Http\Controllers\Frontend\services\ServicesController;
use App\Http\Controllers\Frontend\training\TrainingController;
use App\Http\Controllers\Frontend\certificateCheck\CertificateCheckController;

Route::get('/', function () {
   return view('frontend.home');
});
/** ====================Start Route for Auth ======================*/
Route::get('/login', [LoginController::class, 'create'])->name("login");
Route::post('/login', [LoginController::class, 'store'])->name("login.store");

/** ====================Start Route for Frontend ======================*/
Route::get('contact', [ContactUsController::class, 'contact'])->name('signet.contact');
Route::get('audits', [ServicesController::class, 'audit'])->name('signet.audit');
Route::get('certifications', [ServicesController::class, 'certification'])->name('signet.certification');
Route::get('verifications', [ServicesController::class, 'verification'])->name('signet.verification');


Route::get('trainings', [TrainingController::class, 'training'])->name('signet.training');
Route::get('trainings-schedule', [TrainingController::class, 'trainingSchedule'])->name('signet.training-schedule');
Route::get('certificate-check', [CertificateCheckController::class, 'certificateCheck'])->name('signet.certificate-check');
Route::get('get-quote', [QuoteController::class, 'quote'])->name('signet.quote');



/** ====================Start Route for Backend ======================*/
Route::middleware(['auth'])->prefix('admin')->group(
   function () {
      Route::get('/logout', [LoginController::class, 'logout'])->name("logout");

      Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
   }
);