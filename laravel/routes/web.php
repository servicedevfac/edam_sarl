<?php

use App\Http\Controllers\DevisController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/edam-clean', function () {
    return view('public.edam-clean');
});

Route::get('/edam_gift', [App\Http\Controllers\ProduitController::class, 'publicIndex'])->name('public.edam_gift');
Route::get('/galerie', [GallerieController::class, 'publicIndex'])->name('public.galerie');
Route::get('/contact', function () {
    return view('public.contact');
});
route::post('/contact', [MessageController::class, 'store'])->name('messages.store');
route::post('/edam-clean', [DevisController::class, 'store'])->name('devis.store');



use App\Http\Controllers\dashboard;

Route::get('/dashboard', [dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/messages/mark-all-read', [MessageController::class, 'markAllRead'])->name('messages.markAllRead');
    route::resource('devis', DevisController::class);
    Route::get('/devis/export', [DevisController::class, 'export'])->name('devis.export');
    route::resource('galleries', GallerieController::class);
    route::resource('messages', MessageController::class);
    route::resource('produits', App\Http\Controllers\ProduitController::class);
});



require __DIR__ . '/auth.php';
