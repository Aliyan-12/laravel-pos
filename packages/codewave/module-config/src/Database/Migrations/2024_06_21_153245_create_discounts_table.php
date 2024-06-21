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
        Schema::create('codewave_config_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('to_price');
            $table->double('from_price');
            $table->string('type');
            $table->double('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codewave_config_discounts');
    }
};
