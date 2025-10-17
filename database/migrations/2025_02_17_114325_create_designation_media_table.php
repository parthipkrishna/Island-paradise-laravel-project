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
        Schema::create('designation_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id')->nullable()->index(); 
            $table->unsignedBigInteger('destination_detail_id')->nullable()->index(); 
            $table->string('image_url', 255); 
            $table->string('image_type', 50)->nullable(); 
            $table->softDeletes(); 
            $table->timestamps(); 

            
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('set null');
            $table->foreign('destination_detail_id')->references('id')->on('destination_details')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designation_media');
    }
};
