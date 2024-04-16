<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuggestClassModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'CLASS_ID',
      'DESC',
      'IMG_SRC',
      "CREATOR",
      "MODIFIER",
      "CREATETIME",
      "LASTUPDATE"
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $table = "SUGGEST_CLASS";
    protected $dateFormat = 'Y-m-d';
}
