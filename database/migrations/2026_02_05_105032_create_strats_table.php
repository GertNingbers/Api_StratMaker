<?php

use App\Models\Game;
use App\Models\Group;
use App\Models\Map;
use App\Models\Strat;
use App\Models\User;
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
        Schema::create('strats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Group::class, 'group_id')->nullable();
            $table->foreignIdFor(Game::class, 'game_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Map::class, 'map_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->unsignedBigInteger('views')->default(0);
            $table->text('disscription');
            $table->enum('status', ['public', 'private'])->default('public');
            $table->enum('side', ['attack', 'defend']);
            $table->timestamps();
        });

        // StratImg table for storing multiple images related to a strat
        Schema::create('strat_imgs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Strat::class, 'strat_id')->constrained()->onDelete('cascade');
            $table->string('floor');
            $table->text('img_path');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strats');
        Schema::dropIfExists('strat_imgs');
    }
};
