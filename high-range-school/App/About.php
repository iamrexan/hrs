<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_tbldata';
    
    public $fillable = [
        'created_by', 'section_title', 'section_inner_title', 'section_inner_description', 'visibility_status'
    ];
}
