<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassListModel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'TYPE_NAME',
        'CODE',
        'CREATETIME',
        'CREATOR',
        'LASTUPDATE',
        'MODIFIER'
      ];

      protected $primaryKey = 'id';

      protected $dateFormat = 'Y-m-d';

      public $timestamps = false;

      protected $table = 'class_list';
}
