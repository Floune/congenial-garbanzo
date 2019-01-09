<?php

if (App::environment('local')) {
    Route::get('/loginas/{user}', function(App\User $user) {
        Auth::login($user);
        return back();
    });
}