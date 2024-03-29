<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Accesing the
Route::get('/', [DashboardController::class , 'index'] )->name('idea.home');

Route::get('/terms', function () {return view('terms');});

Route::get('/ideas/{id}', [IdeaController::class, 'show'])->name('idea.show');

Route::get('/ideas/{id}/edit', [IdeaController::class, 'edit'])->name('idea.edit');

Route::put('/ideas/{id}', [IdeaController::class, 'update'])->name('idea.update');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.add');

Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('idea.destroy');

// For comments

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comment.store');

