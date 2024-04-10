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
        Schema::table('trains', function (Blueprint $table) {
            // aggiunta colonne tabella
            $table->string("company", 50);
            $table->string("departure_station", 100);
            $table->string("arrival_station", 100);
            $table->timeTZ("departure_time");
            $table->timeTZ("arrival_time");
            $table->date("departure_day");
            $table->string("train_code", 20)->unique();
            $table->tinyInteger("n_coaches")->nullable();
            $table->boolean("on_schedule");
            $table->boolean("is_cancelled");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //rimozione colonne
            $table->dropColumn(
                "company",
                "departure_station",
                "arrival_station",
                "departure_time",
                "arrival_time",
                "departure_day",
                "train_code",
                "n_coaches",
                "on_schedule",
                "is_cancelled"
            );
        });
    }
};
