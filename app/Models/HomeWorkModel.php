<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWorkModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'CLASS_ID',
      'CONTENT',
      'SUBMISSION_TIME',
      'CREATETIME',
      'CREATOR',
      'LASTUPDATE',
      'MODIFIER'
    ];
    protected $table = "HOMEWORK";
    protected $primaryKey = 'id';

    protected $dateFormat = 'Y-m-d';

    public $timestamps = false;
}
