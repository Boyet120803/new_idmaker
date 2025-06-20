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
        Schema::table('completes', function (Blueprint $table) {
        $table->text('photo_position')->nullable();
        $table->text('signature_position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('completes', function (Blueprint $table) {
           $table->dropColumn(['photo_position', 'signature_position']);
        });
    }
};
