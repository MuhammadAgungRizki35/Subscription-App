<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    public function up()
{
    Schema::create('subscriptions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Tidak menggunakan foreignId agar tidak ada constraint
        $table->enum('package', ['A', 'B', 'C']);
        $table->date('start_date');
        $table->date('end_date');
        $table->enum('status', ['active', 'inactive'])->default('active');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
