<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery-events';
    
    protected $fillable = [
        'tilte', 'description'
    ];
}
