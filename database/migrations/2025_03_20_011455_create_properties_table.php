<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('properties', function (Blueprint $table) {
        $table->id(); 
        $table->string('title'); 
        $table->text('description'); 
        $table->integer('num_of_bedrooms'); 
        $table->integer('num_of_bathrooms'); 
        $table->string('location'); 
        $table->decimal('price', 10, 2); 
        $table->string('property_type'); 
        $table->string('photo'); 
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
