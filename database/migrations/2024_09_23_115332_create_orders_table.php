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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Automatinis unikalus id
            $table->unsignedBigInteger('item_id'); // Prekės ID
            $table->integer('quantity'); // Užsakytas kiekis
            $table->date('order_date'); // Užsakymo data
            $table->string('status'); // Užsakymo būsena
            $table->timestamps(); // Automatiniai 'created_at' ir 'updated_at' laukai

            // Užsienio raktas į „items“ lentelę
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
