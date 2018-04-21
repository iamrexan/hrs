<?php

namespace HRS;

use Illuminate\Database\Eloquent\Model;

class alumni_type extends Model
{
    protected $fillable = [
        'types',
    ];
    
    public function compose($view)
    {
        $alumni_type = new alumni_type;
        $alumni_type = $alumni_type->get();
        
        $view->with('alumni_type', $alumni_type);
    }
}
