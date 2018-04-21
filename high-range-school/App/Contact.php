<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'inst_name', 'add_line_1', 'add_line_2', 'mail', 'phone', 'hours'
    ];
}
