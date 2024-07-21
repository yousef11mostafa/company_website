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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('secondname')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('company')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('img')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('github')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
