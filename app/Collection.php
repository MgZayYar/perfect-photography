<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use softDeletes;
    protected $fillable = ['subphotography_id','photo'];

    public function subphotography()
	{
		return $this->belongsTo('App\Subphotography');
	}
}
