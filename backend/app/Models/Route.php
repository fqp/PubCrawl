<?php

# app/Models/Route.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Route extends Model
{
	public function attractions()
	{
		return $this->belongsToMany('App\Models\Attraction');
	}
}
