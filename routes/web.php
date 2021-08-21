<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GcategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\WordController;
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
// jsdhygfuygfuvyerg654965198dbgdefrbhgedrf

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'],function (){
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('category',CategoryController::class);
    Route::resource('posts',PostController::class);
    Route::resource('videos',VideoController::class);
    Route::resource('gcategory',GcategoryController::class);
    Route::resource('gallery',GalleryController::class);
    Route::post('ckeditor/image_upload', CKEditorController::class)->name('upload');
    Route::resource('event',EventController::class);
    Route::resource('notification',NotificationController::class);
    Route::resource('staff',StaffController::class);
    Route::resource('management',\App\Http\Controllers\ManagementController::class);
    Route::resource('calendar',CalendarController::class);
    Route::resource('word',WordController::class);


    // Route Category  List
    Route::get('videocat', [App\Http\Controllers\VideocatController::class, 'index'])->name('videocat.index');
    Route::get('videocat/create', [App\Http\Controllers\VideocatController::class, 'create'])->name('videocat.create');
    Route::get('videocat/edit/{id}', [App\Http\Controllers\VideocatController::class, 'edit'])->name('videocat.edit');
    Route::post('videocat/store', [App\Http\Controllers\VideocatController::class, 'store'])->name('videocat.store');
    Route::patch('videocat/update/{id}', [App\Http\Controllers\VideocatController::class, 'update'])->name('videocat.update');
    Route::delete('videocat/destroy/{id}', [App\Http\Controllers\VideocatController::class, 'destroy'])->name('videocat.destroy');
    Route::get('videocat/show/{id}', [App\Http\Controllers\VideocatController::class, 'show'])->name('videocat.show');

    //route ads and video
    Route::get('index',[\App\Http\Controllers\AdsController::class,'index'])->name('ads.index');
    Route::get('create',[\App\Http\Controllers\AdsController::class,'create'])->name('ads.create');
    Route::get('edit/{id}',[\App\Http\Controllers\AdsController::class,'edit'])->name('ads.edit');
    Route::post('update',[\App\Http\Controllers\AdsController::class,'update'])->name('ads.update');
    Route::post('store',[\App\Http\Controllers\AdsController::class,'store'])->name('ads.store');

});


Auth::routes();

 Route::get('/foo', function () {
 // Artisan::call('storage:link');
 $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
 $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
 symlink($targetFolder,$linkFolder);
 echo 'Symlink process successfully completed';
 });

