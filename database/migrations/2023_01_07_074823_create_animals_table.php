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
            $table->foreignId('feedlot_id')->constrained()->onDelete('cascade');
            $table->foreignId('breed_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('tag');
            $table->string('sex');
            $table->string('age');
            $table->float('entry_weight');
            $table->string('initial_animal_image')->nullable();
            $table->string('current_animal_image')->nullable();
            $table->mediumText('brief_history')->nullable();
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
