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
        Schema::create('person_work_times', function (Blueprint $table) {
            $table->id();
            $table->text("note")->nullable();
            $table->unsignedBigInteger("person_id");
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("person_id")->references("id")->on("people")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_work_times');
    }
};
