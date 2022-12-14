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
        Schema::create('vehicle_maintenances', function (Blueprint $table) {
            $table->id();
            $table->string("responsible");
            $table->string("driver");
            $table->double("money_amount");
            $table->timestamp("date");
            $table->text("note")->nullable();
            $table->unsignedBigInteger("vehicle_id");
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("vehicle_id")->references("id")->on("vehicles")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_maintenances');
    }
};
