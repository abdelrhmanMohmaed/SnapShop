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
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
<<<<<<< Updated upstream
            $table->string('text');
            $table->text('picture');
            $table->text('summary');
            $table->text('description');
            $table->float('quantity', 8,2);
            $table->string('discount_type');
            $table->float('discount_value');
=======
            $table->string('name');
            $table->string('picture');
            $table->text('summary');
            $table->text('description');
            $table->integer('quantity');
            $table->enum('unit',  ['kg', 'piece'])->comment('kg, piece');
            $table->decimal('price', total: 8, 2);
            $table->boolean('is_active')->default(0)->comment('1 => Display');
>>>>>>> Stashed changes
            $table->timestamps();
            $table->softDeletes();
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
