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
        Schema::create('liquidation_borrows', function (Blueprint $table) {
            $table->id();
            // $table->string("borrower");
            $table->double("money_amount");
            $table->timestamp("date");
            $table->text("note")->nullable();
            $table->unsignedBigInteger("liquidation_id");
            $table->unsignedBigInteger("person_id");
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("liquidation_id")->references("id")->on("liquidations")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('liquidation_borrows');
    }
};
