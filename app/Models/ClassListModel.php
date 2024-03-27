<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TeacherDetailModel;

class ClassListModel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'CLASS_NAME',
        'IMG_SRC',
        'TEACHER_ID',
        'DESCRIBE',
        'START_DATE',
        'CLASS_WEEK_DAY',
        'START_TIME',
        'END_TIME',
        'CREATETIME',
        'CREATOR',
        'LASTUPDATE',
        'MODIFIER'
      ];

      public $primaryKey = 'id';

      protected $dateFormat = 'Y-m-d';

      public $timestamps = false;

      protected $table = 'class_list';
      // public function teacherElement(){
      //   return $this->belongsTo(TeacherDetailModel::class,'teacher_id','id')->select(['id','teacher_id','name','graduated_school']);
      // }
}
