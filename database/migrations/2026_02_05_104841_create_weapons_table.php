<?php

use App\Models\Game;
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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'game_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('damage');
            $table->string('fire_rate');
            $table->string('img_weapon_path');
            $table->timestamps();
        });

        // Pivot table for operator-weapon relationship
        Schema::create('operator_weapon', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'weapon_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Game::class, 'operator_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
        Schema::dropIfExists('operator_weapon');
    }
};
