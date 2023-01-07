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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tag');
            $table->string('breed');
            $table->string('sex');
            $table->float('buying_weight');
            $table->float('selling_weight')->nullable();
            $table->string('brought_from');
            $table->string('sold_to')->nullable();
            $table->string('initial_animal_image')->nullable();
            $table->string('current_animal_image')->nullable();
            $table->mediumText('brief_history')->nullable();
            $table->date('buying_date');
            $table->date('selling_date')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
