<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WerkorderStatus extends Model
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
    protected string $table = 'werkorder_statussen';

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
        'status',
        'actief',
        'in_visueel',
    ];

    public static function find($id)
    {
        return DB::table('werkorder_statussen')->find($id);
    }

}
