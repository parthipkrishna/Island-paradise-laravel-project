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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false)->index();
            $table->string('title', 255)->nullable(false)->index();
            $table->string('price', 255)->nullable(false)->index();
            $table->boolean('status')->default(true);
            $table->string('image', 255)->nullable();
            $table->text('short_description')->nullable()->index();
            $table->string('locations')->nullable();
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
