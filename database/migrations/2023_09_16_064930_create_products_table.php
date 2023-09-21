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
            $table->id();  // This will create an auto-incrementing primary key column named 'id'
            $table->string('name');  // A VARCHAR column for the product's name
            $table->decimal('price', 8, 2);  // A decimal column for the product's price
            $table->text('description')->nullable();  // A TEXT column for the product's description, which can also be NULL
            $table->text('image')->nullable();  // A TEXT column for the product's description, which can also be NULL
            $table->timestamps();  // This will create 'created_at' and 'updated_at' timestamp columns
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
