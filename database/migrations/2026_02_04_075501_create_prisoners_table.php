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
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'first_name');
            $table->string(column: 'last_name');
            $table->string(column: 'national_id');
            $table->string(column: 'prisoner_number')->unique();
            $table->string(column: 'prisoner_card_id');
            $table->string(column: 'phone_number');
            $table->string(column: 'date_of_birth');
            $table->string(column: 'entry_date');
            $table->string(column: 'is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prisoners');
    }
};
