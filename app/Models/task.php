<?php

namespace App\Models;
use Notifiable;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'tasks';
    protected $fillable=[
        'task_name',
        'department_id',
        'assigned_to',
        'date_assignment',
        'date_completed',
        'status',
        'completion_remark',
        'Attachement',
    ];
}

