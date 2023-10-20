<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuration
 * 
 * @property int $id
 * @property string $name
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Configuration extends Model
{
	protected $table = 'configuration';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'status'
	];
}
