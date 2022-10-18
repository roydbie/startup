<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<>
     */
    protected $fillable = [
        'description',
        'created_by',
        'client',
        'estimated_duration',
        'planning_date',
        'planning_time',
        'deadline_date',
        'deadline_time',
    ];
}
