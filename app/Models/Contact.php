<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property string $phone1
 * @property string $phone2
 * @property string $phone3
 * @property string $phone4
 * @property string $phone5
 * @property string $title_ar_form
 * @property string $title_en_form
 * @property string $sub_title_ar_form
 * @property string $sub_title_en_form
 * @property string $button_ar_form
 * @property string $button_en_form
 * @property string $google_maps
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contact';

	protected $fillable = [
		'title_ar',
		'title_en',
		'phone1',
		'phone2',
		'phone3',
		'phone4',
		'phone5',
		'title_ar_form',
		'title_en_form',
		'sub_title_ar_form',
		'sub_title_en_form',
		'button_ar_form',
		'button_en_form',
		'google_maps'
	];
}
