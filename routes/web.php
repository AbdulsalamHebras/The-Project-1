<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Story;

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

Route::get('/dashboard', function () {
    $categories = Category::all();
    $stories = Story::latest()->limit(5)->get();
    $adventureStories = Category::with([
        'stories' => function ($query) {
            $query->select('id', 'image', 'category_id')->limit(5);
        }
    ])->where('name', 'Adventure')->first();
    $historyStories = Category::with([
        'stories' => function ($query) {
            $query->select('id', 'image', 'category_id')->limit(5);
        }
    ])->where('name', 'History')->first();
    return view('dashboard', compact('categories', 'stories', 'adventureStories', 'historyStories'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('story.show/{id}',[StoryController::class,'show'])->name('story.show');
    Route::get('/story/read/{id}', [StoryController::class, 'read'])->name('story.read');
    Route::get('/story/favorite/{id}', [StoryController::class, 'favorite'])->name('story.favorite');
});

require __DIR__.'/auth.php';