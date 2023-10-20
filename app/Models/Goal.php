<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Goal
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property string $desc_ar
 * @property string $desc_en
 * @property string $title_ar1
 * @property string $title_en1
 * @property string $desc_ar1
 * @property string $desc_en1
 * @property string $title_ar_g
 * @property string $title_en_g
 * @property string $goal_ar_1
 * @property string $goal_en_1
 * @property string $goal_ar_2
 * @property string $goal_en_2
 * @property string $goal_ar_3
 * @property string $goal_en_3
 * @property string $goal_ar_4
 * @property string $goal_en_4
 * @property string $goal_ar_5
 * @property string $goal_en_5
 * @property string $goal_ar_6
 * @property string $goal_en_6
 * @property string $goal_ar_7
 * @property string $goal_en_7
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Goal extends Model
{
	protected $table = 'goals';

	protected $fillable = [
		'title_ar',
		'title_en',
		'desc_ar',
		'desc_en',
		'title_ar1',
		'title_en1',
		'desc_ar1',
		'desc_en1',
		'title_ar_g',
		'title_en_g',
		'goal_ar_1',
		'goal_en_1',
		'goal_ar_2',
		'goal_en_2',
		'goal_ar_3',
		'goal_en_3',
		'goal_ar_4',
		'goal_en_4',
		'goal_ar_5',
		'goal_en_5',
		'goal_ar_6',
		'goal_en_6',
		'goal_ar_7',
		'goal_en_7'
	];
}
