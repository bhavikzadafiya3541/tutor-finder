<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\SubjectController as AdminSubjectController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SubjectController;
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

Route::name('frontend')->group(function() {
    Route::get('/', [FrontendController::class, 'index'])->name('.index');
    Route::get('subjects', [SubjectController::class, 'subjects'])->name('.subjects');
    Route::get('subject/tutor/{tutor}', [SubjectController::class, 'subjectTutor'])->name('.subject.tutor');

    Route::get('profile', [FrontendController::class, 'profile'])->middleware(['auth', 'verified'])->name('.profile');

    Route::middleware('auth:web')->group(function () {
        Route::post('profile/update/{user}', [FrontendController::class, 'profileUpdate'])->name('.profile.update');
        Route::post('password/update/{user}', [FrontendController::class, 'updatePassword'])->name('.update.password');
    });
});

Route::get('admin', function() {
    return redirect()->route('admin.login');
});

Route::middleware('auth:admin')->prefix('admin')->group(function() {
    Route::get('dashboard', DashboardController::class)->name('admin.dashboard');

    Route::resource('cities', CityController::class)->names('admin.cities');
    Route::resource('subjects', AdminSubjectController::class)->names('admin.subjects');
});

require __DIR__.'/auth.php';
