<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'IMG_SRC',
      "CREATOR",
      "MODIFIER",
      "CREATETIME",
      "LASTUPDATE"
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $table = "CAROUSEL";
    protected $dateFormat = 'Y-m-d';
}
