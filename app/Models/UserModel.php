<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'ACCT',
    'PWD',
    'NAME',
    'AGE',
    'SEX',
    'IDENTITY_ID',
    'CREATETIME',
    'LASTUPDATE',
    'MODIFIER'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
  ];
  protected $table = "USER";
  protected $primaryKey = 'id';

  protected $dateFormat = 'Y-m-d';

  public $timestamps = false;
}
