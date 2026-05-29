<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("projets", function (Blueprint $table) {
            $table->id()->primary();
            $table->string("name", 200);
            $table->datetime("prazo");
            $table->foreignId("team_id")->constrained()->onCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("projets");
    }
};
