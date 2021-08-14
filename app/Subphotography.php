<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subphotography extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','photography_id','photo'];

    public function photography()
	{
		return $this->belongsTo('App\Photography');
	}
	public function collection()
	    {
	    	return $this->hasMany('App\Collection');
	    }
	
}
