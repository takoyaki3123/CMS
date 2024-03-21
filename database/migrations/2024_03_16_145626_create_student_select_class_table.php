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
        Schema::create('STUDENT_SELECT_CLASS', function (Blueprint $table) {
            $table->id();
            $table->char("GRADUATED",1)->default('0');
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
        Schema::dropIfExists('STUDENT_SELECT_CLASS');
    }
};
