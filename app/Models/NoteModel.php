<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'CLASS_ID',
      'CONTENT',
      'STUDENT_ID',
      'CREATETIME',
      'CREATOR',
      'LASTUPDATE',
      'MODIFIER'
    ];
    protected $table = "NOTE";
    protected $primaryKey = 'id';

    protected $dateFormat = 'Y-m-d';

    public $timestamps = false;
}
