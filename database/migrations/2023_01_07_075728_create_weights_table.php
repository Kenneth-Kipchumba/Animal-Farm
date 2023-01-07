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
            $table->float('week_1', 6, 6)->nullable();
            $table->float('week_2', 6, 6)->nullable();
            $table->float('week_3', 6, 6)->nullable();
            $table->float('week_4', 6, 6)->nullable();
            $table->float('week_5', 6, 6)->nullable();
            $table->float('week_6', 6, 6)->nullable();
            $table->float('week_7', 6, 6)->nullable();
            $table->float('week_8', 6, 6)->nullable();
            $table->float('week_9', 6, 6)->nullable();
            $table->float('week_10', 6, 6)->nullable();
            $table->float('week_11', 6, 6)->nullable();
            $table->float('week_12', 6, 6)->nullable();
            $table->float('week_13', 6, 6)->nullable();
            $table->float('week_14', 6, 6)->nullable();
            $table->float('week_15', 6, 6)->nullable();
            $table->float('week_16', 6, 6)->nullable();
            $table->float('week_17', 6, 6)->nullable();
            $table->float('week_18', 6, 6)->nullable();
            $table->float('week_19', 6, 6)->nullable();
            $table->float('week_20', 6, 6)->nullable();
            $table->float('week_21', 6, 6)->nullable();
            $table->float('week_22', 6, 6)->nullable();
            $table->float('week_23', 6, 6)->nullable();
            $table->float('week_24', 6, 6)->nullable();
            $table->float('week_25', 6, 6)->nullable();
            $table->float('week_26', 6, 6)->nullable();
            $table->float('week_27', 6, 6)->nullable();
            $table->float('week_28', 6, 6)->nullable();
            $table->float('week_29', 6, 6)->nullable();
            $table->float('week_30', 6, 6)->nullable();
            $table->float('week_31', 6, 6)->nullable();
            $table->float('week_32', 6, 6)->nullable();
            $table->float('week_33', 6, 6)->nullable();
            $table->float('week_34', 6, 6)->nullable();
            $table->float('week_35', 6, 6)->nullable();
            $table->float('week_36', 6, 6)->nullable();
            $table->float('week_37', 6, 6)->nullable();
            $table->float('week_38', 6, 6)->nullable();
            $table->float('week_39', 6, 6)->nullable();
            $table->float('week_40', 6, 6)->nullable();
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
