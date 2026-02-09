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
        Schema::create('gadgets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'game_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('img_gadget_path');
            $table->timestamps();
        });

        // Pivot table for operator-gadget relationship
        Schema::create('operator_gadget', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'gadget_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Game::class, 'operator_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgets');
        Schema::dropIfExists('operator_gadget');
    }
};
