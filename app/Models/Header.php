<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Header
 * 
 * @property int $id
 * @property string $address_ar
 * @property string $address_en
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $whatsapp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Header extends Model
{
	protected $table = 'header';

	protected $fillable = [
		'address_ar',
		'address_en',
		'email',
		'facebook',
		'twitter',
		'instagram',
		'youtube',
		'whatsapp'
	];
}
