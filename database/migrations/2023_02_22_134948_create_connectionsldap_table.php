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
        Schema::create('connectionsldaps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('server');
            $table->string('port');
            $table->string('username');
            $table->string('password');
            $table->string('base_dn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connections_ldap');
    }
};
