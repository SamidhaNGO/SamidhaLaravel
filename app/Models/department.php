<?php

namespace App\Models;
use Notifiable;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'departments';
    protected $fillable=[
        'department_name',
        'status',
        'created-at',
        'updated_at',
    ];
}