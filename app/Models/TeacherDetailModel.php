<?php

namespace App\Models;

use ClassListModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDetailModel extends Model
{
  use HasFactory;
  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'NAME',
    'GRADE_SCHOOL',
    'EXPERTISE',
    'EMAIL',
    'CREATETIME',
    'CREATOR',
    'LASTUPDATE',
    'MODIFIER'
  ];

  public $primaryKey = 'id';

  protected $dateFormat = 'Y-m-d';

  public $timestamps = false;

  protected $table = 'TEACHER_DETAIL';
  // public function ClassListModelHasMany(){
  //   return $this->hasMany(ClassListModel::class,'id','teacher_id');
  // }
}
