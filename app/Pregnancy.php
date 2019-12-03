<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    protected $table = 'pregnancies';

    protected $fillable = ['week', 'status'];

    public $timestamps = false;

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
