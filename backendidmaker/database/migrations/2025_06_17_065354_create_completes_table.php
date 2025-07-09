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
        Schema::create('completes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address');
            $table->string('course');
            $table->string('student_id')->unique();
            $table->string('contact');
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('birth_date');
            $table->string('signature')->nullable();
            $table->string('image')->nullable();
            $table->string('qr_code')->nullable();
            $table->text('photo_position')->nullable();
            $table->text('signature_position')->nullable();
            $table->text('firstname_fontsize')->nullable();
            $table->text('lastname_fontsize')->nullable();
            $table->string('school_years')->nullable();
            $table->string('esc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completes');
    }
};
