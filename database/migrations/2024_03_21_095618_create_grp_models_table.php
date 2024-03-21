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
        Schema::create('GRP', function (Blueprint $table) {
            $table->id();
            $table->string('GRP_NAME');
            $table->string('GRP_LEADER');
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
        Schema::dropIfExists('GRP');
    }
};
