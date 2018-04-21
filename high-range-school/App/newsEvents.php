<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class newsEvents extends Model
{
    protected $table  = 'newsevents';
    public $fillable = [
        'created_by', 'newsOrEvents'
    ];
}
