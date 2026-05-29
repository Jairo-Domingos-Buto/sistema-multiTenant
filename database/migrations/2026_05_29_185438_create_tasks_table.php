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
        Schema::create("tasks", function (Blueprint $table) {
            $table->id()->primary();
            $table->string("titulo", 50);
            $table->datetime("prazo");
            $table->enum("status", ["nao_iniciada", "em_desenvolvimento", "concluida"]);
            $table->enum("prioridade", ["baixa", "media", "alta"]);
            $table->text("comentario");
            $table->foreignId("projet_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tasks");
    }
};
