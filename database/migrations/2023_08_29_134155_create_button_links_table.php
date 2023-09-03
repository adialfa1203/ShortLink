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
        Schema::create('button_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('microsite_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('buttons_id')->references('id')->on('buttons')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('button_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('button_links');
    }
};
