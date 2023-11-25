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
            $table->string('productID', 50)->primary();
            $table->string('productName', 200);
            $table->string('productBrandID', 50);
            $table->string('subCategoryID', 50);
            $table->integer('productOriginalPrice');
            $table->integer('productDiscountPrice');
            $table->text('productInfo');
            $table->string('productBarcode', 50);
            $table->integer('productInStock');
            $table->string('productImage', 1000);
            $table->string('productSideImage1', 1000);
            $table->string('productSideImage2', 1000);
            $table->string('productSideImage3', 1000);
            $table->dateTime('productCreatedDate');
            $table->dateTime('productModifiedDate');
            $table->boolean('isFlashSale');
            $table->boolean('isActive');

            // Laravel timestamps for created_at and updated_at columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
