<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('picName');
            $table->string('picContract');
            $table->string('picEmail');
            $table->string('businessName');
            $table->string('businessDescription');
            $table->string('partnerId');
            $table->string('username');
            $table->string('password');
            $table->string('credentialAttachments');
            $table->string('city');
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
        //
    }
}