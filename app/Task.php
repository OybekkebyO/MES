<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
	public function task()
	{
		return $this->belongsTo(Task::class);
	}
}
