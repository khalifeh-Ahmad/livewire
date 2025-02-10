<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
  use HasFactory;
  protected $fillable = [
    'follower_id',
    'followed_id '
  ];
}
