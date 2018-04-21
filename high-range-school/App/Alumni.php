<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    
    protected $fillable = [
        'section_title', 'title', 'description', 'created_by'
    ];
}
