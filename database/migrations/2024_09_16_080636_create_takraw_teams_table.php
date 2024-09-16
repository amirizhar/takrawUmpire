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
        Schema::create('takraw_teams', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Use UUID for the primary key
            $table->string('team_name'); // Add additional columns as needed
            $table->string('team_abv'); // Add additional columns as needed
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takraw_teams');
    }
};
