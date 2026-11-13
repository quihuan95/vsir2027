<?php

use App\Http\Controllers\AbstractSubmissionController;
use App\Http\Controllers\ContactLeadController;
use App\Http\Controllers\MailPreviewController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationFileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.updating')->name('home');

Route::view('/about', 'pages.updating')->name('about');
Route::view('/about/organizing-committee', 'pages.updating')->name('about.organizing-committee');
Route::view('/about/venue', 'pages.updating')->name('about.venue');

Route::redirect('/speakers', '/faculty', 301);

Route::view('/schedule', 'pages.updating')->name('schedule');

Route::view('/faculty', 'pages.updating')->name('faculty');

Route::view('/registration', 'pages.updating')->name('registration');
Route::view('/registration/delegate-registration', 'pages.updating')->name('registration.delegate-registration');
Route::view('/registration/international-registration', 'pages.updating')->name('registration.international-registration');
Route::post('/registration/submit', [RegistrationController::class, 'submit'])->name('registration.submit');
Route::get('/registration/payment/callback', [RegistrationController::class, 'paymentCallback'])->name('registration.payment.callback');
Route::get('/registration/dr', [RegistrationController::class, 'paymentCallback'])->name('payment.registration.dr');
Route::get('/registration/payment/success/{registration?}', [RegistrationController::class, 'paymentSuccess'])->name('registration.payment.success');
Route::get('/registration/payment/cancel/{registration?}', [RegistrationController::class, 'paymentCancel'])->name('registration.payment.cancel');
Route::get('/registration/payment/error/{registration?}', [RegistrationController::class, 'paymentError'])->name('registration.payment.error');
Route::view('/registration/closed', 'pages.updating')->name('registration.closed');
Route::middleware('auth')->group(function () {
    Route::get('/registration/files/{registration}/degree', [RegistrationFileController::class, 'degree'])
        ->name('registration.files.degree');
});
Route::view('/registration/abstract-submission', 'pages.updating')->name('registration.abstract-submission');
Route::view('/registration/abstract-submission/international', 'pages.updating')->name('registration.abstract-submission.international');
Route::post('/registration/abstract-submission/submit', [AbstractSubmissionController::class, 'submit'])->name('registration.abstract-submission.submit');
Route::view('/registration/abstract-submission/closed', 'pages.updating')->name('registration.abstract-submission.closed');

Route::view('/travel-support', 'pages.updating')->name('travel-support');
Route::view('/travel-support/vietnam-visa', 'pages.updating')->name('travel-support.vietnam-visa');
Route::view('/travel-support/transportation', 'pages.updating')->name('travel-support.transportation');
Route::view('/travel-support/accommodation', 'pages.updating')->name('travel-support.accommodation');

Route::view('/sponsor', 'pages.updating')->name('sponsor');

Route::view('/blog', 'pages.updating')->name('blog');

Route::get('/blog/{slug}', function () {
    return view('pages.updating');
})->name('blog.show');

Route::view('/contact', 'pages.updating')->name('contact');
Route::post('/contact-lead', [ContactLeadController::class, 'store'])->name('contact-lead.store');

Route::get('/dev/mail-preview', MailPreviewController::class)->name('dev.mail-preview');
