<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Infrastructure extends Model
{
    protected $table = 'infrastructure';
    public $fillable = [
        'created_by', 'section_title', 'section_inner_title', 'section_inner_description', 'visibility_status'
    ];
}
