<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSelectClassModel extends Model
{
  use HasFactory;
  protected $fillable = [
    'STUDENT_ID',
    'CLASS_ID',
    'GRADUATED',
    "CREATOR",
    "MODIFIER",
    "CREATETIME",
    "LASTUPDATE"
  ];
  protected $primaryKey = "id";
  public $timestamps = false;
  protected $table = "STUDENT_SELECT_CLASS";
  protected $dateFormat = 'Y-m-d';
}
