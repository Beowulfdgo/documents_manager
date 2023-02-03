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
        Schema::create('department_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departments_id');
            $table->foreign('departments_id')->references('id')->on('departments');
            $table->unsignedBigInteger('documents_uploads_id');
            $table->foreign('documents_uploads_id')->references('id')->on('documents_uploads'); 
            $table->timestamps();
            
           // $table->foreign('documents_uploads_id')->references('id')->on('documents_uploads');
           
           
 
        });
       

          }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_document');
    }
};
