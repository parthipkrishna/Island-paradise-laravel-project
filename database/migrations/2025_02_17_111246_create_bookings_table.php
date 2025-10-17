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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('package_id')->index();
            $table->string('status', 50)->default('pending');
            $table->text('subject')->nullable();
            $table->text('note')->nullable();
            $table->integer('number_of_days')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('booking_type')->default('online')->nullable()->index();
            $table->string('travelers_count')->nullable();
            $table->integer('no_of_rooms')->nullable();
            $table->integer('no_of_adults')->nullable();
            $table->integer('no_of_child_6_11')->nullable();
            $table->integer('no_of_child_11_above')->nullable();
            $table->string('permit_status', 50)->nullable();
            $table->string('permit_application_no')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
