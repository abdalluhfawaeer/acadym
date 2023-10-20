<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property string $desc_ar
 * @property string $desc_en
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'courses';

	protected $fillable = [
		'title_ar',
		'title_en',
		'desc_ar',
		'desc_en',
		'image'
	];
}
