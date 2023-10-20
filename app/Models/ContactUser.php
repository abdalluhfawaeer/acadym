<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactUser
 * 
 * @property int $id
 * @property string $first
 * @property string $last
 * @property string $email
 * @property string $msg
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ContactUser extends Model
{
	protected $table = 'contact_user';

	protected $fillable = [
		'first',
		'last',
		'email',
		'msg'
	];
}
