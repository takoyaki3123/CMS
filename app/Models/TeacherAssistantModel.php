<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAssistantModel extends Model
{
  use HasFactory;
  protected $fillable = [
    "CLASS_ID",
    "TEACH_ID",
    "USER_ID",
    "CREATOR",
    "MODIFIER",
    "CREATETIME",
    "LASTUPDATE"
  ];
  protected $table = "TEACHER_ASSISTANT";

  protected $primaryKey = 'id';

  protected $dateFormat = 'Y-m-d';

  public $timestamps = false;
}
