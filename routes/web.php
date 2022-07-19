<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/widgets', function () {
    $widgets = \App\Models\Widget::active()->sort()->get()->toArray();

    return Inertia::render('Tests/Widget', compact('widgets'));
});

require __DIR__.'/auth.php';

Route::get('/{slug}', function (Request $request, string $slug) {
    $page = \App\Models\Page::with(['widgets' => function ($query) {
        $query->orderBy('page_has_widgets.sort_number');
    }])->active()->ofSlug($slug)->first();

    $page->widgets->each(fn ($widget) => $widget->loadData());

    return Inertia::render('Tests/Page', compact('page'));
});
