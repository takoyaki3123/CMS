<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextBookModel extends Model
{
  use HasFactory;
  protected $fillable = [
    'CLASS_ID',
    'CONTENT',
    'FILE_ID',
    'CREATETIME',
    'CREATOR',
    'LASTUPDATE',
    'MODIFIER'
  ];
  protected $table = "TEXTBOOK";
  protected $primaryKey = 'id';

  protected $dateFormat = 'Y-m-d';

  public $timestamps = false;
}
