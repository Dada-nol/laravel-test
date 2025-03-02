<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécuter la migration.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'properties_id')) {
                $table->dropForeign(['properties_id']); // Supprime la contrainte
                $table->dropColumn('properties_id'); // Supprime la colonne
            }

            if (!Schema::hasColumn('bookings', 'property_id')) {
                $table->foreignId('property_id')->constrained()->onDelete('cascade');
            }
        });
    }

    /**
     * Annuler la migration.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'property_id')) {
                $table->dropForeign(['property_id']);
                $table->dropColumn('property_id');
            }

            if (!Schema::hasColumn('bookings', 'properties_id')) {
                $table->foreignId('properties_id')->constrained()->onDelete('cascade');
            }
        });
    }
};
