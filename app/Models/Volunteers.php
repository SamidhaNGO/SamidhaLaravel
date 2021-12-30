<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Volunteers extends Authenticatable
{
	use Notifiable;

	protected $table = 'volunteers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // protected $fillable = [
    //     'first_name', 'email', 'password',
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
