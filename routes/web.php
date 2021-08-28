<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Media\MediaController;
use App\Http\Controllers\Admin\Topic\TopicController;
use App\Http\Controllers\Admin\Video\VideoController;
use App\Http\Controllers\Admin\Region\RegionController;
use App\Http\Controllers\Admin\Article\ArticleController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Playlist\PlayListController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('setting', [SettingController::class, 'index']);
Route::resource('media', MediaController::class);
Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);
Route::resource('topics', TopicController::class);
Route::resource('regions', RegionController::class);
Route::resource('videos', VideoController::class);
Route::resource('playlists', PlayListController::class);