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
        Schema::create('requests', function (Blueprint $table) {            
            $table->id();
            $table->string("firstName");
            $table->string("lastName");
            $table->bigInteger("user_id");
            $table->bigInteger("telephone");
            $table->string("email");
            $table->string("status")->default("pending");
            $table->string("typeOfMaintenance");
            $table->dateTime("inspectionDate");
            $table->string("damageDate");
            $table->time("preferedTime");
            $table->string("picture")->nullable();
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
        Schema::dropIfExists('requests');
    }
};
