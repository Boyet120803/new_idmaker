<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdPrintLogsTable extends Migration
{
    public function up()
    {
        Schema::create('id_print_logs', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('reason')->nullable(); // lost, damaged, update, first print, etc.
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('id_print_logs');
    }
}
