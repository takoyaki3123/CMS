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
            $table->string('ACCT');
            $table->string('PWD');
            $table->string('NAME');
            $table->string('AGE');
            $table->char('sex',1);
            $table->char('IDENTITY_ID',1);
            $table->timestamp('CREATETIME')->useCurrent();
            $table->timestamp('LASTUPDATE')->useCurrent();
            $table->string('MODIFIER');
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
