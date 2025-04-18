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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('slug');
            $table->enum('property_type', ['Sell', 'Rent', 'Short-term','New Projects'])->nullable();
            $table->enum('home_type', ['Apartment', 'House', 'Villa','Cotage','Condominimum','Town house','Studio'])->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('apt_number')->nullable();
            $table->enum('is_show_address', ['Yes', 'No', 'Without the street number'])->nullable();
            $table->string('quarter')->nullable();
            $table->enum('area', ['North', 'Center', 'Jerujalem','South'])->nullable();
            $table->boolean('is_exclusivity')->default(0)->nullable();
            $table->boolean('is_exceptional_property')->default(0);
            $table->boolean('is_off_marcket')->default(0)->nullable();
            $table->double('asked_price',8,2)->nullable()->nullable();
            $table->boolean('is_price_request')->default(0)->nullable();
            $table->text('visivility_options')->nullable();
            $table->text('keywords')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->boolean('is_tour_reservation')->default(0)->nullable();
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
