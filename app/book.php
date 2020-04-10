<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function writer()
    {
        return $this->belongsTo('App\writer');
    }
}
