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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fast_name',100);
            $table->string('last_name',100);
            $table->string('email')->unique()->index();
            $table->date('date_of_birth');
            $table->string('education');
            $table->string('gender');
            $table->string('company',210);
            $table->float('packages');
            $table->float('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};