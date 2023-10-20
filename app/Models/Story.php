<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Story
 * 
 * @property int $id
 * @property string $image1
 * @property string $title_ar
 * @property string $title_en
 * @property string $sub_title_ar
 * @property string $sub_title_en
 * @property string $desc_ar
 * @property string $desc_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $sub_title_ar1
 * @property string $sub_title_en1
 * @property string $desc_ar_1
 * @property string $desc_en_1
 * @property string $desc_ar_2
 * @property string $desc_en_2
 * @property string $title_ar1
 * @property string $title_en1
 *
 * @package App\Models
 */
class Story extends Model
{
	protected $table = 'story';

	protected $fillable = [
		'image1',
		'title_ar',
		'title_en',
		'sub_title_ar',
		'sub_title_en',
		'desc_ar',
		'desc_en',
		'sub_title_ar1',
		'sub_title_en1',
		'desc_ar_1',
		'desc_en_1',
		'desc_ar_2',
		'desc_en_2',
		'title_ar1',
		'title_en1'
	];
}
