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
        Schema::table('users', function (Blueprint $table) {
            //
            //  $table->unsignedBigInteger('departments_id');
              //$table->foreignId('departments_id')->constrained('departments')->onDelete('set null');
              //local 0 , ldap 1
              $table->unsignedBigInteger('ldap');
              $table->string('guid')->nullable();
              $table->string('user')->nullable();
              $table->string('domain')->nullable();              

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
