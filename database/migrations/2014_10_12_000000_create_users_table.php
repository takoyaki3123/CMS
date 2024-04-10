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
        Schema::create('USER', function (Blueprint $table) {
            $table->id();
            $table->string('EMAIL');
            $table->string('ACCT');
            $table->string('PWD');
            $table->string('NAME');
            $table->string('AGE')->nullable();
            $table->char('sex',1);
            $table->char('IDENTITY_ID',1); // 1 學生 2 助教 3 教師
            $table->timestamp('CREATETIME')->useCurrent();
            $table->timestamp('LASTUPDATE')->useCurrent();
            $table->string('MODIFIER')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
