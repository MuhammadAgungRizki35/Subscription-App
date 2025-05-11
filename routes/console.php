<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Mendefinisikan command Artisan kustom atau proses lain yang perlu dijalankan secara terjadwal
Artisan::command('subscription:check', function () {
    // Misalnya, kita ingin menambah proses khusus untuk pengecekan subscription
    $this->comment('Subscription check command is running');
})->describe('Check subscription status');
