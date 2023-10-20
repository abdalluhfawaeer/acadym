<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nav
 *
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property string $sub_title_ar
 * @property string $sub_title_en
 * @property string $img
 * @property string $menu_1_ar
 * @property string $menu_1_en
 * @property string $menu_2_ar
 * @property string $menu_2_en
 * @property string $menu_3_ar
 * @property string $menu_3_en
 * @property string $menu_4_ar
 * @property string $menu_4_en
 * @property string $menu_5_ar
 * @property string $menu_5_en
 * @property string $menu_6_ar
 * @property string $menu_6_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Nav extends Model
{
	protected $table = 'nav';

	protected $fillable = [
		'title_ar',
		'title_en',
		'sub_title_ar',
		'sub_title_en',
		'img',
		'menu_1_ar',
		'menu_1_en',
		'menu_2_ar',
		'menu_2_en',
		'menu_3_ar',
		'menu_3_en',
		'menu_4_ar',
		'menu_4_en',
		'menu_5_ar',
		'menu_5_en',
		'menu_6_ar',
		'menu_6_en'
	];
}
