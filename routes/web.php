<?php

use App\Http\Controllers\ProfileController;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invite', function () {
    return view('invite-form');
});

Route::post('/invite', function (Request $request) {
    $request->validate([
        'name' => 'nullable|string',
        'email' => 'required|email',
    ]);

    (new \App\Actions\InviteNewUser())->handle($request->email, $request->name);

    return redirect('/invite')->with('success', 'Invitation sent!');
})->name('invite');

Route::get('/email', function () {
    return view('user-invitation');
});


//Route::get('/send-test-email', function () {
//    Mail::to('belliz@me.com')->send(new TestEmail());
//    return 'Email wurde gesendet';
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
