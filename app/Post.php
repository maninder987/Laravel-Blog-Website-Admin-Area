<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function getFeaturedAttribute($featured)
  {
    return asset($featured);
  }
}
