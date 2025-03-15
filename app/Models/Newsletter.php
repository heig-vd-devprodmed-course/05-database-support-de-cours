<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
	/**
	 * Les attributs qui sont assignables en masse.
	 *
	 * @var list<string>
	 */
	protected $fillable = ['email'];
}
