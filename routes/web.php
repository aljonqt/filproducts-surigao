<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/complaint', [PageController::class, 'complaint'])->name('complaint');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/residential-inquiry', [PageController::class, 'residentialInquiry'])->name('residential.inquiry');
Route::get('/residential-upgrade', [PageController::class, 'residentialUpgrade'])->name('residential.upgrade');

Route::get('/filbiz-inquiry', [PageController::class, 'filbizInquiry'])->name('filbiz.inquiry');
Route::get('/filbiz-upgrade', [PageController::class, 'filbizUpgrade'])->name('filbiz.upgrade');
Route::post('/complaint-submit', [PageController::class,'submitComplaint'])->name('complaint.submit');
Route::post('/filbiz-inquiry', [PageController::class,'submitFilbiz'])->name('filbiz.submit');
Route::post('/filbiz-upgrade', [PageController::class, 'submitFilbizUpgrade'])->name('filbiz.upgrade.submit');
Route::post('/residential-inquiry', [PageController::class, 'submitResidential'])->name('residential.inquiry.submit');
Route::post('/residential-upgrade', [PageController::class, 'submitResidentialUpgrade'])->name('residential.upgrade.submit');



Route::get('/branches', [PageController::class, 'branch'])->name('branch');



