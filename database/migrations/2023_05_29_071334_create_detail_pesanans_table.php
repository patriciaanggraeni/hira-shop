<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('order_details_code')->unique();
            $table->unsignedInteger('qty')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('order_details');
    }
};
