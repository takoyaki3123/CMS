<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'CLASS_ID',
      'TITLE',
      'CONTENT',
      "CREATOR",
      "MODIFIER",
      "CREATETIME",
      "LASTUPDATE"

    ];
    protected $primaryKey = 'id';
    protected $table = "BOARD";
    public $timestamps = false;
    protected $dateFormat = 'Y-m-d';
}
