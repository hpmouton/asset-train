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
        /**
         * AssetID (Primary Key)
         * Asset Name
         * Description
         * Category (e.g., IT Equipment, Furniture, Vehicles)
         * Status (e.g., In Use, In Repair, Decommissioned)
         * Acquisition Date
         * Purchase Price
         * Current Value
         * Location (e.g., Office A, Warehouse B)
         * Manufacturer
         * Serial Number
         * Warranty Information
         */
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->foreignId('category_id')->onDelete('cascade');
            $table->dateTime('acquisition_date')->nullable();
            $table->foreignId('division_id')->onDelete('cascade');
            $table->string('manufacturer');
            $table->string('serial_number');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
