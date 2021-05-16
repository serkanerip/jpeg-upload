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

Route::middleware('api')->namespace("App\Http\Controllers")->prefix('/v1')->name('api::')->group(function () {
    Route::get('/headlines', 'Api\HeadlineController@index');
    Route::get('theme_categories/', 'Api\ThemeCategoryController@index');
    Route::get('theme_categories/{category}', 'Api\ThemeCategoryController@show');
    Route::get('theme_categories/{category}/images', 'Api\ThemeCategoryController@images');
    Route::get('theme_categories/{category}/icons', 'Api\ThemeCategoryController@icons');
    Route::get('wallpaper_categories/', 'Api\WallpaperCategoryController@index');
    Route::get('wallpaper_categories/{category}', 'Api\WallpaperCategoryController@show');
    Route::get('wallpaper_categories/{category}/images', 'Api\WallpaperCategoryController@images');
});
