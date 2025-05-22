<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/industri', function () {
//     return view('livewire.front.industri.index');
// })->name('industri');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','role:siswa','check_user_email'])
    ->name('dashboard');

Route::view('industri', 'industri')
    ->middleware(['auth', 'verified'])
    ->name('industri');

// Route::view('not-authorized', 'errors.not-authorized')
//     ->name('not-authorized');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
