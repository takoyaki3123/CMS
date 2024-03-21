<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrpModel extends Model
{
    use HasFactory;
    protected $fillable = [
      'CLASS_ID',
      'GRP_NAME',
      'GRP_LEADER',
      'CREATETIME',
      'CREATOR',
      'LASTUPDATE',
      'MODIFIER'
    ];
    protected $table = "GRP";
    protected $primaryKey = 'id';

    protected $dateFormat = 'Y-m-d';

    public $timestamps = false;
}
