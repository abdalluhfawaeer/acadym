<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 * 
 * @property int $id
 * @property string $image1
 * @property string $title_ar1
 * @property string $title_en1
 * @property string $sub_title_ar1
 * @property string $sub_title_en1
 * @property string $image2
 * @property string $title_ar2
 * @property string $title_en2
 * @property string $sub_title_ar2
 * @property string $sub_title_en2
 * @property string $image3
 * @property string $title_ar3
 * @property string $title_en3
 * @property string $sub_title_ar3
 * @property string $sub_title_en3
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Banner extends Model
{
	protected $table = 'banner';

	protected $fillable = [
		'image1',
		'title_ar1',
		'title_en1',
		'sub_title_ar1',
		'sub_title_en1',
		'image2',
		'title_ar2',
		'title_en2',
		'sub_title_ar2',
		'sub_title_en2',
		'image3',
		'title_ar3',
		'title_en3',
		'sub_title_ar3',
		'sub_title_en3'
	];
}
