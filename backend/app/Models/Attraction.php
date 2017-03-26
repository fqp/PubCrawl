<?php

# app/Models/Attraction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Attraction extends Model
{
	public function routes() {
		return $this->hasMany('App\Models\Route');
	}
}
