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
        Schema::table('annuaires', function (Blueprint $table) {
            $table->foreignId('category_id')->after('id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annuaires', function (Blueprint $table) {
            $table->dropForeign(['category_id']);/*supprime la contrainte de clé étrangère*/
            $table->dropColumn('category_id');/*supprime la colonne/champs category-id*/
        });
    }
};
