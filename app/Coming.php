<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Coming extends Model
{
    public function coming()
	{
		return $this->belongsTo(Coming::class);
	}

}

