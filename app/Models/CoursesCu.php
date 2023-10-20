<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoursesCu
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoursesCu extends Model
{
	protected $table = 'courses_cus';

	protected $fillable = [
		'title_ar',
		'title_en'
	];
}
