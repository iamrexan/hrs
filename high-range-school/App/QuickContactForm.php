<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class QuickContactForm extends Model
{
    protected $fillable = [
      'fname', 'lname', 'email', 'phone', 'message'  
    ];
}
