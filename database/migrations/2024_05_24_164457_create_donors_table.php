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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->foreignId('blood_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('ukuran_kantong');
            $table->integer('age');
            $table->text('address');
            $table->integer('qty')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
