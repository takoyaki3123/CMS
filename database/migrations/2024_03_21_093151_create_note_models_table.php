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
        Schema::create('NOTE', function (Blueprint $table) {
            $table->id();
            $table->string('TITLE');
            $table->string("CONTENT",1000);
            $table->timestamp('CREATETIME')->useCurrent();
            $table->string('CREATOR');
            $table->timestamp('LASTUPDATE')->useCurrent();
            $table->string('MODIFIER');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NOTE');
    }
};
