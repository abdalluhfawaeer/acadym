<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clintcu
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Clintcu extends Model
{
	protected $table = 'clintcus';

	protected $fillable = [
		'title_ar',
		'title_en'
	];
}
