<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $phone_number
 * @property string|null $address
 * @property string|null $photo
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'username',
		'email',
		'password',
		'phone_number',
		'address',
		'photo',
		'remember_token'
	];

	public function orders()
	{
		return $this->hasMany(Order::class, 'buyer_id');
	}
}
