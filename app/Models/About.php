<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class About
 * 
 * @property int $id
 * @property string $image1
 * @property string $title_ar
 * @property string $title_en
 * @property string $sub_title_ar
 * @property string $sub_title_en
 * @property string $desc_ar
 * @property string $desc_en
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class About extends Model
{
	protected $table = 'about';

	protected $fillable = [
		'image1',
		'title_ar',
		'title_en',
		'sub_title_ar',
		'sub_title_en',
		'desc_ar',
		'desc_en',
		'facebook',
		'twitter',
		'instagram'
	];
}
