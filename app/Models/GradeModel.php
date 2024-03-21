<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'TYPE',
      'WORK_ID',
      'GRADE',
      'STUDENT_ID',
      'CREATETIME',
      'CREATOR',
      'LASTUPDATE',
      'MODIFIER'
    ];
    protected $table = "GRADE";
    protected $primaryKey = 'id';

    protected $dateFormat = 'Y-m-d';

    public $timestamps = false;
}
