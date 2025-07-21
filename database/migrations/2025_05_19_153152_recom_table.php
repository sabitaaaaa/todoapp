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
     Schema::create('treks', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('region');
    $table->integer('duration'); // in days
    $table->decimal('budget'); // in USD
    $table->string('altitude'); // low/mid/high
    $table->json('tags'); // nature, culture, etc.
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
