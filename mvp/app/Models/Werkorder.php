<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werkorder extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public bool $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected array $fillable = [
        'omschrijving',
        'aangemaakt_door',
        'klant',
        'status',
        'geschatte_tijdsduur',
        'planning_datum',
        'planning_tijd',
        'deadline_datum',
        'deadline_tijd',
    ];
}
