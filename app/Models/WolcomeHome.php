<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WolcomeHome
 * 
 * @property int $id
 * @property string $title_ar_main
 * @property string $title_en_main
 * @property string $image1
 * @property string $title_ar1
 * @property string $title_en1
 * @property string $image2
 * @property string $title_ar2
 * @property string $title_en2
 * @property string $image3
 * @property string $title_ar3
 * @property string $title_en3
 * @property string $image4
 * @property string $title_ar4
 * @property string $title_en4
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class WolcomeHome extends Model
{
	protected $table = 'wolcome_home';

	protected $fillable = [
		'title_ar_main',
		'title_en_main',
		'image1',
		'title_ar1',
		'title_en1',
		'image2',
		'title_ar2',
		'title_en2',
		'image3',
		'title_ar3',
		'title_en3',
		'image4',
		'title_ar4',
		'title_en4'
	];
}
