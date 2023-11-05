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
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Friend1Id',false,true);
            $table->bigInteger('Friend2Id',false,true);
            $table->tinyInteger('isAccepted')->default(0);
            $table->timestamps();
            $table->foreign('Friend1Id')->references('id')->on('users');
            $table->foreign('Friend2Id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
