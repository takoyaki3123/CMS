<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'FILE_NAME',
      'FILE_TYPE',
      'FILE_PATH',
      'FILE_SIZE',
      'CREATETIME',
      'CREATOR',
      'LASTUPDATE',
      'MODIFIER'
    ];
    protected $table = "FILE";
    protected $primaryKey = 'id';

    protected $dateFormat = 'Y-m-d';

    public $timestamps = false;
}
