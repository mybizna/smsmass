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
        Schema::create('smsmass_autoresponder', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('subject');
            $table->text('body');
            $table->integer('wait_period');
            $table->string('table_name', 255);
            $table->string('email_field', 255);
            $table->string('date_field', 255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('published')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smsmass_autoresponder');
    }
};
