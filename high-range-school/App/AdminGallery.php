<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class AdminGallery extends Model
{
    protected $table = 'admingallery';
    
    public $fillable = [
        'imageUrl', 'created_by', 'visibility_status'
    ];
}
