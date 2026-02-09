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
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class, 'game_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('side')->nullable();
            $table->string('speed')->nullable();
            $table->string('armor')->nullable();
            $table->text('country')->nullable();
            $table->text('affiliation')->nullable();
            $table->date('release_date')->nullable();
            $table->string('img_op_logo_path');
            $table->string('img_op_full_path');
            $table->string('img_op_ability_path');
            $table->text('op_ability_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
