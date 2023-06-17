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
        // php artisan make:model Employee -m 
        
        
        /* This code is creating a database table named "employees" with columns for various employee
        information such as first name, last name, email, date of birth, education, gender, company,
        packages, experience, and timestamps for when the record was created and updated. The
        `Schema::create` method is used to create the table, and the `Blueprint` object is used to
        define the table's columns and their data types. */
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