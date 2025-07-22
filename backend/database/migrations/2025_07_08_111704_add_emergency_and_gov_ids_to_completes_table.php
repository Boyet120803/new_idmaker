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
            $table->enum('status', ['first_print', 're_print'])->default('first_print');
            $table->string('reason')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->string('school_year')->nullable()->after('student_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('completes', function (Blueprint $table) {
             $table->dropColumn([
                'status',
                'reason',
                'is_archived',
                'school_year',
            ]);
        });
    }
};
