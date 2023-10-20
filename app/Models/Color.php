<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Color
 * 
 * @property int $id
 * @property string $color1
 * @property string $color2
 * @property string $color3
 * @property string $color4
 * @property string $color5
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Color extends Model
{
	protected $table = 'colors';

	protected $fillable = [
		'color1',
		'color2',
		'color3',
		'color4',
		'color5'
	];
}
