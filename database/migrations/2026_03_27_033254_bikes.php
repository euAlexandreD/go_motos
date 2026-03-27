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
        Schema::create('bikes', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string('Model')->nullable();
                $table->string('Mark')->nullable();
                $table->string('year')->nullable();
                $table->string('km')->nullable();
                $table->string('price')->nullable();
                $table->timestamps();
                $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes');

    }
};
