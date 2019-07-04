<?php

namespace App;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{

    protected $fillable = ['helper','typeofhelp', 'amount', 'date' ,'patient_id','patient_id'];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public  function getDateAttribute($value)
    {
        return Verta::instance($value)->format('Y/n/j');
    }
}
