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
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'game_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('img_top_view_path');
            $table->string('img_3_floor_path')->nullable();
            $table->string('img_2_floor_path')->nullable();
            $table->string('img_1_floor_path')->nullable();
            $table->string('img_alt_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};
