<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class AdminHome extends Model
{
    protected $table = 'home_welcome';
    protected $fillable = [
      'description', 'created_by' 
    ];
}
