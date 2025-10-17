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
        Schema::create('package_media', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('package_id')->nullable()->index();
            $table->unsignedBigInteger('package_detail_id')->nullable()->index();

            $table->string('media_url', 255)->nullable();
            $table->string('media_type', 50)->nullable();

            $table->softDeletes();
            $table->timestamps();


            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('package_detail_id')->references('id')->on('package_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_media');
    }
};
