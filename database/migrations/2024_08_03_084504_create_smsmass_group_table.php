<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('smsmass_group', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->integer('ordering')->default(10);
            $table->tinyInteger('published')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smsmass_group');
    }
};
