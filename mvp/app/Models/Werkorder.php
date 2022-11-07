<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Werkorder extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected string $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected string $table = 'werkorders';

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
