<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WerkorderStatus extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'werkorder_statussen';

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
        'status',
        'actief',
        'in_visueel',
    ];

    public static function findStatus($id)
    {
        return DB::table('werkorder_statussen')->find($id)->status;
    }

    public static function find($id)
    {
        return DB::table('werkorder_statussen')->find($id);
    }

    public static function updateActief($id, $actief)
    {
        return DB::table('werkorder_statussen')->find($id)->update(['actief' => $actief]);
    }


}
