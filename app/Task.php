<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // // 1対1
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    // 1対多(Inverse)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
