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
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD:SudCorpInventoryWTL/database/migrations/2022_04_10_195132_create_users_table.php
            $table->string('email')->primary();
            $table->string('password')->nullable(false)->change();
            $table->string('fname')->nullable(false)->change();
            $table->string('fname')->nullable(false)->change();
=======
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> parent of 2e21a74 (DesignMod_Migrat10April2022):SudCorpInventoryWTL/database/migrations/2014_10_12_000000_create_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
