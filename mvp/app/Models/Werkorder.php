<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Werkorder extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'werkorders';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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

    public static function orderByDesc(string $string): Collection
    {
        return DB::table('werkorders')->orderBy($string, 'desc')->get();
    }

    public static function find($id)
    {
        return DB::table('werkorders')->find($id);
    }
}
