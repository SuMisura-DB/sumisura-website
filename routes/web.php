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

// Redirect 'dashboard' route requests to the index route (due to the prefix)
Route::get('/dashboard', fn() => redirect()->route('dashboard.index'))
    ->name('dashboard');


Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard.')
    ->group(function () {

        // Dashboard index
        Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'root'])
            ->name('index');

        /* Projects */

            // Create
            Route::get('/projects/create', [App\Http\Controllers\Dashboard\DashboardController::class, 'createConstructionProject'])
                ->name('construction_projects_create');

            // Post Request (AJAX)
            Route::post('/projects/create', [App\Http\Controllers\Dashboard\ConstructionProjectController::class, 'create'])
                ->name('construction_projects_create_request');

            // Route::get('/products/create', ConstructionProjectForm::class)->name('construction_projects_create');

            // List
            Route::get('/projects/list', [App\Http\Controllers\Dashboard\DashboardController::class, 'listConstructionProjects'])
                ->name('construction_projects_list');

        /* End of Projects */

        /* Blog */
        Route::get('/blog/list', [App\Http\Controllers\Dashboard\DashboardController::class, 'blogList'])
            ->name('blog_list');

        // Another example page
        Route::get('/blog/create', [App\Http\Controllers\Dashboard\DashboardController::class, 'createArticle'])
            ->name('create_article');
    });


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
