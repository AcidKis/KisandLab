<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('short_description');
            $table->decimal('rating', 3, 1); // Исправлено: 3 цифры (включая 1 после запятой)
            $table->integer('views')->default(0);
            $table->text('content');
            $table->foreignIdFor(User::class); // Исправлено: правильное объявление внешнего ключа
            $table->integer('comments_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
