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
        Schema::create('liquidation_spends', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->double("money_amount");
            $table->timestamp("date");
            $table->text("note")->nullable();
            $table->unsignedBigInteger("liquidation_id");
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("liquidation_id")->references("id")->on("liquidations")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liquidation_spends');
    }
};
