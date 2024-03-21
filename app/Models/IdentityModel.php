<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityModel extends Model
{
  use HasFactory;
  protected $fillable = [
    'NAME'
  ];
  protected $primaryKey = 'id';
  protected $table = 'IDENTITY';
  public $timestamps = false;
}
