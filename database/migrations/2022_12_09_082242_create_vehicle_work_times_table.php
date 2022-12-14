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
        Schema::create('vehicle_work_times', function (Blueprint $table) {
            $table->id();
            $table->boolean("is_present");
            $table->string("driver");
            $table->integer("overtime")->default(0);
            $table->integer("hours_count")->default(0);
            $table->text("note")->nullable();
            $table->timestamp("date");
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
        Schema::dropIfExists('vehicle_work_times');
    }
};
