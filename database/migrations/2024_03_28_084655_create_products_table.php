<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('medicine_name');
            $table->string('generic_name')->nullable();
            $table->enum('medicine_type', ['tablet', 'capsule', 'syrup', 'injection', 'cream', 'other'])->default('other');
            $table->string('power')->nullable();
            $table->enum('power_type', ['mg', 'ml', 'peach'])->default('peach');
            $table->string('medicine_unit')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('best_price')->nullable();
            $table->string('discount')->nullable();
            $table->enum('discount_type', ['flat', 'percent'])->default('percent');
            $table->string('stock_quantity')->nullable();
            $table->text('description')->nullable();
            $table->text('manufacture_date')->nullable();
            $table->text('expire_date')->nullable();
            $table->string('medicine_image')->nullable();
            $table->integer('status')->default(1);

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');



            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
