<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{

    protected $fillable = ['helper','typeofhelp', 'amount', 'date' ,'patient_id','patient_id'];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
