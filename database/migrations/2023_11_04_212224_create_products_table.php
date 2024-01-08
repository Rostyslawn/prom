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
            $table->string('name');
            $table->string('slug', 255)->unique();
            $table->text('description');
            $table->string('img');
            $table->string('seller');
            $table->integer("price");
            $table->integer("sale")->nullable();
            $table->integer('amount');
            $table->integer('likes');
            $table->integer("category_id");
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
