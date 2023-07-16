<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('brand_name')->unique();
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
