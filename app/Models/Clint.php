<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clint
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Clint extends Model
{
	protected $table = 'clint';

	protected $fillable = [
		'title_ar',
		'title_en',
		'image'
	];
}
