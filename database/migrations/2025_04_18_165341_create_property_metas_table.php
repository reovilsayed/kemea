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
        Schema::create('property_metas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->cascadeOnDelete();
            $table->bigInteger('size_sqm');
            $table->bigInteger('surface_land_sqm');
            $table->boolean('is_flexible')->default(0)->nullable();
            $table->string('arnona_2_month')->nullable();
            $table->double('condominimum_fees',8,2)->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bed_rooms')->nullable();
            $table->integer('bath_rooms')->nullable();
            $table->json('additional_feature')->nullable();
            $table->json('view')->nullable();
            $table->enum('exposer', ['North', 'South', 'East', 'West'])->nullable();
            $table->integer('belconi_amount')->nullable();
            $table->string('belconi_surface')->nullable();
            $table->integer('terraces_amount')->nullable();
            $table->string('terraces_surface')->nullable();
            $table->json('extra_features')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('to_floor')->nullable();
            $table->boolean('is_last_floor')->nullable()->default(0);
            $table->date('consturection_date')->nullable();
            $table->enum('property_condition', ['Renovated', 'Preserved', 'Work to be done'])->nullable();
            $table->enum('entry_date', ['Immediate', 'Flexible', 'With a Tenant'])->nullable();
            $table->longText('description')->nullable();
            $table->double('agent_fees',8,2)->nullable();
            $table->boolean('is_share_other_agent')->default(0)->nullable();
            $table->integer('share_other_agent_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_metas');
    }
};
