<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // Automatinis unikalus id
            $table->string('name'); // Tiekėjo pavadinimas
            $table->string('contact_info'); // Kontaktinė informacija
            $table->timestamps(); // Automatiniai 'created_at' ir 'updated_at' laukai
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
