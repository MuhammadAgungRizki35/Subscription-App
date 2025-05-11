<?php
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/subscribe', [SubscriptionController::class, 'showForm']);
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);
Route::get('/subscriptions', [SubscriptionController::class, 'showSubscriptions'])->name('subscriptions');
