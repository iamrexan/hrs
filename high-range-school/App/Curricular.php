<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Curricular extends Model
{
    protected $table = 'curricular';
    
    protected $fillable = [
        'section_title', 'title', 'description', 'created_by'
    ];
}
