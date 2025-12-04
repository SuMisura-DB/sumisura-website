<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\ConstructionProjectForm;

Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::get('dashboard', [App\Http\Controllers\Dashboard\HomeController::class, 'root'])
//     ->middleware(['auth', 'verified'])
//     ->name('root');

Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard.')
    ->group(function () {

        // Dashboard index
        Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'root'])
            ->name('index');

        /* Projects */
            // Create
            // Route::get('/projects/create', [App\Http\Controllers\Dashboard\DashboardController::class, 'createConstructionProject'])
            //     ->name('construction_projects_create');

            Route::get('/products/create', ConstructionProjectForm::class)->name('construction_projects_create');

            // List
            Route::get('/projects/list', [App\Http\Controllers\Dashboard\DashboardController::class, 'listConstructionProjects'])
                ->name('construction_projects_list');
        /* End of Projects */

        /* Blog */
        Route::get('/blog/list', [App\Http\Controllers\Dashboard\DashboardController::class, 'blogList'])
            ->name('blog_list');

        // Another example page
        Route::get('/settings', [App\Http\Controllers\Dashboard\SettingsController::class, 'index'])
            ->name('settings');
    });


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
