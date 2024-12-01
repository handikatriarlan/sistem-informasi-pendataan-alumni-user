<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/alumni', function () {
        return view('front.alumni');
    });
});

Route::get('/', function () {
    return view('front.index');
})->name('home');


Route::get('/login', function () {
    return view('front.login');
});

// Route::get('/register', function () {
//     return view('front.register');
// });

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/events', function () {
    return view('front.event');
});

Route::get('/profile', function () {
    return view('front.profile');
});

require __DIR__ . '/auth.php';
