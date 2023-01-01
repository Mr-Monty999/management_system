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
        Schema::create('custody_spends', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("responsible");
            $table->double("money_amount");
            $table->timestamp("date");
            $table->text("note")->nullable();
            $table->unsignedBigInteger("custody_id");
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("custody_id")->references("id")->on("custodies")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custody_spends');
    }
};
