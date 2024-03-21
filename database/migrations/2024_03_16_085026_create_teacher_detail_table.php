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
        Schema::create('TEACHER_DETAIL', function (Blueprint $table) {
          $table->string('NAME');
          $table->string('GRADUATED_SCHOOL');
          $table->string('IMG_SRC');//教師照片
          $table->string('EXPERTISE');
          $table->string('EMAIL');
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
        Schema::dropIfExists('TEACHER_DETAIL');
    }
};
