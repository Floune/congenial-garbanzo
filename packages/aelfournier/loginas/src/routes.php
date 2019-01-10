<?php

Route::middleware(['web'])->group(function() {

if (App::environment('local')) {
    Route::get('/loginas/{id}', function($id) {
        $user = \User::find($id);

        \Auth::login($user, true);
        return redirect('/');
    });
}
});