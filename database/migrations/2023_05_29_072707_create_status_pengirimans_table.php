<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('delivery_status', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_status_code')->unique();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('delivery_status');
    }
};
