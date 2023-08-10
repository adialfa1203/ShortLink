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
        Schema::create('microsite_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_order');
            $table->foreignId('microsite_id')->references('id')->on('microsites')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('content');
            $table->timestamp('creation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsite_pages');
    }
};
