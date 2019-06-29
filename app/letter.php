<?php

namespace App;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;

class letter extends Model
{
    protected $fillable = ['attach','shomare',  'date','textarea' ];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }


}
