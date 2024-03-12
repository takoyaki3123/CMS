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
        Schema::create('CLASS_LIST', function (Blueprint $table) {
            $table->id();
            $table->string('CLASS_NAME');
            // $table->bigInteger('TYPE_ID');
            $table->string('IMG_SRC');
            $table->bigInteger('TEACHER_ID');
            $table->string('DESCRIBE')->nullable();
            $table->date('START_DATE');
            $table->integer('CLASS_WEEK_DAY')->nullable();
            $table->time('START_TIME')->nullable();
            $table->time('END_TIME')->nullable();
            $table->integer('CLASS_WEEK')->nullable();
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
        Schema::dropIfExists('CLASS_LIST');
    }
};
