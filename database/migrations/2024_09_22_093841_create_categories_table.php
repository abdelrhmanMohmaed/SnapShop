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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< Updated upstream:database/migrations/2024_09_22_093841_create_categories_table.php
            $table->text('description');
=======
            $table->string('picture');
            $table->boolean('is_active')->default(0)->comment('1 => Display');
>>>>>>> Stashed changes:database/migrations/2024_09_22_093924_create_categories_table.php
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
