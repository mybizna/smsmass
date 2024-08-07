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
        Schema::create('smsmass_campaign', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->text('body');
            $table->dateTime('send_date');
            $table->tinyInteger('is_sent')->nullable()->default(0);
            $table->tinyInteger('published')->nullable()->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smsmass_campaign');
    }
};
