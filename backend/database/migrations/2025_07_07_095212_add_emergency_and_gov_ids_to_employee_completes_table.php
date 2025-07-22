<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('employee_completes', function (Blueprint $table) {
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('hdmf_no')->nullable();
            $table->string('photo_position')->nullable();
            $table->string('signature_position')->nullable();
            $table->string('firstname_fontsize')->nullable();
            $table->string('lastname_fontsize')->nullable();
            $table->enum('status', ['first_print', 're_print'])->default('first_print');
            $table->string('reason')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->unsignedInteger('print_count')->default(0);
        });
    }
    public function down(): void
    {
        Schema::table('employee_completes', function (Blueprint $table) {
             $table->dropColumn([
                'emergency_contact_name',
                'emergency_contact_number',
                'tin_no',
                'sss_no',
                'philhealth_no',
                'hdmf_no',
                'photo_position',
                'signature_position',
                'firstname_fontsize',
                'lastname_fontsize',
                'status',
                'reason',
                'is_archived',
                'print_count',
            ]);
        });
    }
};
