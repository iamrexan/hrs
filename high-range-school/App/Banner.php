<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    public $fillable = [
      'banner_title', 'banner_description', 'banner_image', 'created_by', 'visibility_status'
    ];
}
