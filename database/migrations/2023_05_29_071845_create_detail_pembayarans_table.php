<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('payment_details_code')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('payment_details');
    }
};
