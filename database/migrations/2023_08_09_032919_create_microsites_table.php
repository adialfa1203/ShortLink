<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('microsites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('components_id')->references('id')->on('components')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('buttons_id')->references('id')->on('buttons')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('link_microsite');
            $table->string('description')->nullable();
            $table->date('creation_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('name_microsite')->nullable();
            $table->string('qr_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsites');
    }
};
