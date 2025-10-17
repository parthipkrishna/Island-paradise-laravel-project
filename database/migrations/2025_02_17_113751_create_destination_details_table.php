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
        Schema::create('destination_details', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('destination_id')->index(); 
            $table->text('description')->nullable(); 
            $table->string('feature', 255); 
            $table->softDeletes(); 
            $table->timestamps(); 

            
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');

           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_details');
    }
};
