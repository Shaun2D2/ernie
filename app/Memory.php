<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{

    /**
     * mass assignment
     * @var array
     */
    protected $fillable = [
      'name',
      'body',
    ];

}
