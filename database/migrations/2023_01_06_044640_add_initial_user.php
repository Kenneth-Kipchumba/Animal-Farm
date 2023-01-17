<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'first_name' => 'Kenneth',
            'last_name' => 'Kipchumba',
            'email' => 'kipchumba.kenneth@ymail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'first_name' => 'Samson',
            'last_name' => 'Cherutich',
            'email' => 'cherutichsam@gmail.com',
            'password' => Hash::make('password')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};