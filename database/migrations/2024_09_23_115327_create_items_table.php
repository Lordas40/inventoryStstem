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
        Schema::create('items', function (Blueprint $table) {
            $table->id(); // Automatinis unikalus id
            $table->string('name'); // Objekto pavadinimas
            $table->string('category'); // Kategorija (pvz., įranga, įrankiai)
            $table->integer('quantity'); // Kiekis
            $table->string('location'); // Vietovė arba sandėlis
            $table->string('condition'); // Būklė (gera, reikia taisymo)
            $table->unsignedBigInteger('supplier_id'); // Tiekėjo ID (užsienio raktas)
            $table->timestamps(); // Automatiniai 'created_at' ir 'updated_at' laukai

            // Užsienio raktas į „suppliers“ lentelę
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
