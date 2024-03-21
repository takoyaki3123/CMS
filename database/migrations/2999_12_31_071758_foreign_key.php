<?php

use App\Models\ClassListModel;
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
    Schema::table('CLASS_LIST', function (Blueprint $table) {
      //
      $table->foreignId('TYPE_ID')->constrained('CLASS_TYPE', 'id');
    });
    Schema::table('TEACHER_DETAIL', function (Blueprint $table) {
      $table->foreignId('id')->constrained('USER', 'id');
    });
    Schema::table('TEACHER_ASSISTANT',function (Blueprint $table){
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
      $table->foreignId('TEACH_ID')->constrained('TEACHER_DETAIL','id');
      $table->foreignId('USER_ID')->constrained('USER','id');
    });
    Schema::table('STUDENT_SELECT_CLASS',function (Blueprint $table){
      $table->foreignId('STUDENT_ID')->constrained('USER','id');
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
    });
    Schema::table('BOARD',function (Blueprint $table){
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
    });
    Schema::table('TEXTBOOK',function (Blueprint $table){
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
      $table->foreignId('FILE_ID')->nullable()->constrained('FILE','id');
    });
    Schema::table('HOMEWORK',function(Blueprint $table) {
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
    });
    Schema::table('GRADE',function(Blueprint $table){
      $table->foreignId('STUDENT_ID')->nullable()->constrained('USER','id');
      $table->foreignId('GRP_ID')->nullable()->constrained('GRP','id');
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
    });
    Schema::table('NOTE',function(Blueprint $table){
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
      $table->foreignId('STUDENT_ID')->constrained('USER','id');
    });
    Schema::table('GRP',function(Blueprint $table){
      $table->foreignId('CLASS_ID')->constrained('CLASS_LIST','id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('CLASS_LIST', function (Blueprint $table) {
      //
      $table->dropForeign('class_list_type_id_foreign');
    });
    Schema::table('TEACHER_DETAIL',function(Blueprint $table){
      $table->dropForeign('teacher_detail_id_foreign');
    });
    Schema::table('TEACHER_ASSISTANT',function (Blueprint $table){
      $table->dropForeign('teacher_assistant_class_id_foreign');
      $table->dropForeign('teacher_assistant_teach_id_foreign');
      $table->dropForeign('teacher_assistant_user_id_foreign');
    });
    Schema::table('STUDENT_SELECT_CLASS',function (Blueprint $table){
      $table->dropForeign('student_select_class_student_id_foreign');
      $table->dropForeign('student_select_class_class_id_foreign');
    });
    Schema::table('BOARD',function (Blueprint $table){
      $table->dropForeign('board_class_id_foreign');
    });
    Schema::table('TEXTBOOK',function (Blueprint $table){
      $table->dropForeign('textbook_class_id_foreign');
      $table->dropForeign('textbook_file_id_foreign');
    });
    Schema::table('HOMEWORK',function(Blueprint $table) {
      $table->dropForeign('homework_class_id_foreign');
    });
    Schema::table('GRADE',function(Blueprint $table){
      $table->dropForeign('grade_student_id_foreign');
      $table->dropForeign('grade_grp_id_foreign');
      $table->dropForeign('grade_class_id_foreign');
    });
    Schema::table('NOTE',function(Blueprint $table){
      $table->dropForeign('note_class_id_foreign');
      $table->dropForeign('note_student_id_foreign');
    });
    Schema::table('GRP',function(Blueprint $table){
      $table->dropForeign('grp_class_id_foreign');
    });
  }
};
