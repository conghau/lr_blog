<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
  /**
   * @var array
   */
  protected $casts = [
    'allow_comment' => 'boolean',
  ];
}
