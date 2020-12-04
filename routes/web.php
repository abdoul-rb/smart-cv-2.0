<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/admin/me', 'App\Http\Controllers\Dashboard\DashboardController')->name('dashboard');

    Route::prefix('skills')->name('dashboard.skill.')->group(function () {
        Route::get('', 'App\Http\Controllers\Dashboard\SkillController@index')->name('index');
        Route::post('', 'App\Http\Controllers\Dashboard\SkillController@store')->name('store');
    });

    Route::prefix('achieves')->name('dashboard.achieve.')->group(function () {
        Route::get('', 'App\Http\Controllers\Dashboard\AchieveController@index')->name('index');
        #Route::get('/{slug}', 'App\Http\Controllers\Dashboard\AchieveController@show')->name('show');
        Route::get('create', 'App\Http\Controllers\Dashboard\AchieveController@create')->name('create');
        Route::post('', 'App\Http\Controllers\Dashboard\AchieveController@store')->name('store');
    });
});
