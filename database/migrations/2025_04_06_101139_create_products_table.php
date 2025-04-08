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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->unsignedTinyInteger('discount')->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('rating')->default(0);
            $table->unsignedSmallInteger('rating_count')->default(0);
            $table->json('colors')->nullable();
            $table->string('badge')->nullable(); // e.g., New, Hot, Sale
            $table->enum('type', ['arrival', 'bestseller', 'featured', 'special'])->default('arrival');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
