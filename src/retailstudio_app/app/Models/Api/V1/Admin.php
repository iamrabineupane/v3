<?php

namespace App\Models\Api\V1;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable implements JWTSubject

{
    use HasApiTokens, HasFactory, Notifiable;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $table = 'admins';
	/**
	 * Get the identifier that will be stored in the subject claim of the JWT.
	 * @return mixed
	 */
	public function getJWTIdentifier() {
        return $this->getKey();
	}
	
	/**
	 * Return a key value array, containing any custom claims to be added to the JWT.
	 * @return array
	 */
	public function getJWTCustomClaims() {
        return [];

	}
}
