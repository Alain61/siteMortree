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
        Schema::create('annuaires', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('manager');
            $table->string('slug')->unique();
            $table->string('mail')->unique();
            $table->string('phone');
            $table->string('adress');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annuaires');
    }
};
