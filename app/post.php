<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=['content','detail'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
