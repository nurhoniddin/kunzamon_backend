<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route Calendars All
Route::get('/calendar', [\App\Http\Controllers\Api\CalendarController::class,'index'])->name('calendar');

// Route Management  All   // Boshqaruv
Route::get('/manage', [\App\Http\Controllers\Api\ManagementController::class,'index'])->name('management');

// Route Event  All  // Tadbirlar barchasi
Route::get('/event', [\App\Http\Controllers\Api\EventController::class,'index']);
//event single  // Tadbirlar id bilan dittasi
Route::get('/event/{id}', [\App\Http\Controllers\Api\EventController::class,'single_event']);


// Route Staff  All   // Xodimlar
Route::get('/staff', [\App\Http\Controllers\Api\StaffController::class,'index'])->name('staff');

// Route Video  All  // Video yangiliklar
Route::get('/videos', [\App\Http\Controllers\Api\VideoController::class,'index'])->name('video');
//single video
Route::get('/video/{id}', [\App\Http\Controllers\Api\VideoController::class,'video'])->name('single');


// Route Gallery  All // Gallery barchasi
Route::get('/gallery', [\App\Http\Controllers\Api\GalleryController::class,'index'])->name('gallery');
// Route Gallery Category_id All // Gallery kategory id bilan
Route::get('/gallery/{gcategory_id}', [\App\Http\Controllers\Api\GalleryController::class,'gallerys']);

// Route Gallery Category All // Gallery kategory
Route::get('/gcategory', [\App\Http\Controllers\Api\GcategoryController::class,'index'])->name('gcategory');

// Route Category All // kategoriyalar
Route::get('/category', [\App\Http\Controllers\Api\CategoryController::class,'index'])->name('category');

// Route Post All  // Yangiliklar
Route::get('/post', [\App\Http\Controllers\Api\PostController::class,'index'])->name('post');
// Route Post Details // Yangiliklar id bilan
Route::get('/post/{id}', [\App\Http\Controllers\Api\PostController::class,'details']);
// Route Post Category_id All // Yangiliklar kategory id bilan
Route::get('/posts/{category_id}', [\App\Http\Controllers\Api\PostController::class,'posts']);
// Route Post count // kop korilganlar
Route::get('/count', [\App\Http\Controllers\Api\PostController::class,'count']);
// Route Post search // yangiliklarni qidirish
Route::post('/search', [\App\Http\Controllers\Api\PostController::class,'search']);

// Route Notification All  // Elonlar barchasi
Route::get('/notification', [\App\Http\Controllers\Api\NotificationController::class,'index'])->name('notification');
// Route Notification Details // Elonlar id bilan
Route::get('/notification/{id}', [\App\Http\Controllers\Api\NotificationController::class,'single_notification']);

// Route Word // Hikmatli sozlar
Route::get('/word', [\App\Http\Controllers\Api\WordController::class,'index']);

//route ads
Route::get('ads/home',[\App\Http\Controllers\Api\AdsController::class,'index']);
Route::get('ads/detail',[\App\Http\Controllers\Api\AdsController::class,'detail']);
Route::get('ads/category',[\App\Http\Controllers\Api\AdsController::class,'category']);