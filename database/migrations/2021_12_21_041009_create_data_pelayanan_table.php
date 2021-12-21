<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // id
        // created_at ->timestamp
        // fullname -> varchar(255)
        // email -> varchar(255)
        // tanggal -> varchar(255)
        // notes -> varchar(255)
        Schema::create('data_pelayanan', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at');
            $table->string('fullname');
            $table->string('email');
            $table->string('tanggal')->nullable();
            $table->string('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pelayanan');
    }
}
