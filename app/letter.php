<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class letter extends Model
{
    protected $fillable = ['text','shomare',  'date' ];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
