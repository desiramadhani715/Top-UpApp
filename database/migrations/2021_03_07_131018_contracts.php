<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('entityType');
            $table->string('docTitle');
            $table->string('publishStatus');
            $table->string('contractParties');
            $table->string('docNo');
            $table->string('docType');
            $table->string('docContent');
            $table->string('docRev');
            $table->string('status');
            $table->string('spendingBudget');
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