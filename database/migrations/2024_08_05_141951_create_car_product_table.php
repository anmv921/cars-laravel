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
        
        if (!Schema::hasTable('car_product')) {

            Schema::create('car_product', function (Blueprint $table) {
                $table->unsignedInteger('car_id');
                $table->unsignedInteger('product_id');

                $table->foreign('car_id')
                    ->references('id')
                    ->on('cars')
                    ->onDelete('cascade');

                $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');



            }); // End Schema::create
        } // End if
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_products');
    }
};
