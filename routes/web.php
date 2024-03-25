<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SummaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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


// Route::get('/', function () {
//     if (Session::has('user_id')) {
//         return redirect()->route('dashboard');
//     }
//     return view('welcome');
// })->name('/');

Route::get('/', [LandingController::class, 'index'])->name('/');

Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // get
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/payment', function () {
        return view('pembayaran');
    });
    Route::get('/library', function () {
        return view('perpustakaan');
    })->name('perpustakaan');
    Route::get('/explore', [ExploreController::class, 'exploreView'])->name('eksplor');
    Route::get('/book-detail', function () {
        return view('book-detail');
    })->name('book-detail');
    Route::get('/content-reader', function () {
        return view('content-reader');
    })->name('content-reader');
    Route::get('/profile-info', function () {
        return view('profile');
    })->name('profile');
    Route::get('/balance', function () {
        return view('statistik');
    })->name('balance');

    Route::get('/summary', [SummaryController::class, 'inputHeaderView'])->name('summary.header');
    Route::get('/summary/content/{book_id}/{summary_id}', [SummaryController::class, 'inputContentView'])->name('summary.content');
    Route::get('/summary/input/{book_id}/{summary_id}', [SummaryController::class, 'inputView'])->name('summary.input');
    Route::get('/summary/edit/{book_id}/{summary_id}/{topic_id}', [SummaryController::class, 'editTopicView'])->name('summary.edit');
    Route::get('/book', [BookController::class, 'inputBookView'])->name('book');
    Route::get('/summary/topic/delete/{topic_id}', [SummaryController::class, 'deleteTopic'])->name('topic.delete');
    Route::get('/user/delete', [ProfileController::class, 'deleteUser'])->name('user.delete');

    // post
    Route::post('/summary/input/{book_id}/{summary_id}', [SummaryController::class, 'input'])->name('summary.input');
    Route::post('/summary', [SummaryController::class, 'inputHeader'])->name('summary.header');
    Route::post('/book-metadata', [BookController::class, 'inputBook'])->name('book.metadata');
    Route::post('/summary/edit/{book_id}/{summary_id}/{topic_id}', [SummaryController::class, 'editTopic'])->name('topic.edit');
    Route::post('/user/edit', [ProfileController::class, 'editUser'])->name('user.edit');

    Route::get('/profile-info', [ProfileController::class, 'editView'])->name('profile');
});
