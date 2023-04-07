<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use Egulias\EmailValidator\Result\Reason\DetailedReason;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();




Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', CategoryController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/slider', SliderController::class);

    Route::get('/search-category', [CategoryController::class, 'searchCategory'])->name('searchCategory');
    Route::get('/search-news', [NewsController::class, 'searchNews'])->name('searchNews');
    Route::get('/change-password', [ProfileController::class, 'editPassword'])->name('editPassword');
    Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('updatePassword');
});


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return 'link has been connected';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});


//rutingan pron'en
Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/detailCategory/{slug}', [App\Http\Controllers\FrontendController::class, 'detailCategory'])->name('detailCategory');
Route::get('/detail-News/{slug}', [App\Http\Controllers\FrontendController::class, 'detailNews'])->name('detailNews');
Route::get('/search-berita', [FrontendController::class, 'searchBerita'])->name('searchBerita');