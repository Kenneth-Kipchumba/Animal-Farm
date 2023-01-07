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
        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->string('animal_id');
            $table->float('week_1', 4, 6)->nullable();
            $table->float('week_2', 4, 6)->nullable();
            $table->float('week_3', 4, 6)->nullable();
            $table->float('week_4', 4, 6)->nullable();
            $table->float('week_5', 4, 6)->nullable();
            $table->float('week_6', 4, 6)->nullable();
            $table->float('week_7', 4, 6)->nullable();
            $table->float('week_8', 4, 6)->nullable();
            $table->float('week_9', 4, 6)->nullable();
            $table->float('week_10', 4, 6)->nullable();
            $table->float('week_11', 4, 6)->nullable();
            $table->float('week_12', 4, 6)->nullable();
            $table->float('week_13', 4, 6)->nullable();
            $table->float('week_14', 4, 6)->nullable();
            $table->float('week_15', 4, 6)->nullable();
            $table->float('week_16', 4, 6)->nullable();
            $table->float('week_17', 4, 6)->nullable();
            $table->float('week_18', 4, 6)->nullable();
            $table->float('week_19', 4, 6)->nullable();
            $table->float('week_20', 4, 6)->nullable();
            $table->float('week_21', 4, 6)->nullable();
            $table->float('week_22', 4, 6)->nullable();
            $table->float('week_23', 4, 6)->nullable();
            $table->float('week_24', 4, 6)->nullable();
            $table->float('week_25', 4, 6)->nullable();
            $table->float('week_26', 4, 6)->nullable();
            $table->float('week_27', 4, 6)->nullable();
            $table->float('week_28', 4, 6)->nullable();
            $table->float('week_29', 4, 6)->nullable();
            $table->float('week_30', 4, 6)->nullable();
            $table->float('week_31', 4, 6)->nullable();
            $table->float('week_32', 4, 6)->nullable();
            $table->float('week_33', 4, 6)->nullable();
            $table->float('week_34', 4, 6)->nullable();
            $table->float('week_35', 4, 6)->nullable();
            $table->float('week_36', 4, 6)->nullable();
            $table->float('week_37', 4, 6)->nullable();
            $table->float('week_38', 4, 6)->nullable();
            $table->float('week_39', 4, 6)->nullable();
            $table->float('week_40', 4, 6)->nullable();
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
        Schema::dropIfExists('weights');
    }
};
