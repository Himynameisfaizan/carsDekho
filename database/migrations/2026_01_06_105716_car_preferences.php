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
        Schema::create('car_preferences', function(Blueprint $table){
         $table->id();
        $table->unsignedBigInteger('car_lead_id'); // Foreign Key
        $table->string('car_type'); // SUV, Sedan, etc.
        $table->timestamps();

        // Relation jod rahe hain (Optional but good practice)
        $table->foreign('car_lead_id')->references('id')->on('car_leads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
