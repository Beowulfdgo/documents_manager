<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('temporary_files', function (Blueprint $table) {
            //
            //  $table->unsignedBigInteger('departments_id');
              //$table->foreignId('departments_id')->constrained('departments')->onDelete('set null');
              $table->unsignedBigInteger('users_id');
              $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
