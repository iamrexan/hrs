<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class digitaLirary extends Model
{
    protected $table = 'digital library';
    public $fillable = [
        'title', 'file_location', 'created_by', 'visibility_status'
    ];
}
