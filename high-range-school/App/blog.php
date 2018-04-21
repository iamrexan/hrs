<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $filable = [
        'blog_title', 'blog_description', 'created_by', 'status', 'created_date', 'updated_date', 'deleted_date'
    ];
    
    public $timestamps = false;
}
