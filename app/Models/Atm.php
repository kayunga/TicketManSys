<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'atms';
    protected $fillable = [
        'atm_id',
        'site',
        'city',
        'model',
        'bank',
    ];

    public function getAtmIdAttribute($value)
    {
        return $value;
    }

    public function getNameAttribute($value)
    {
        return $value;
    }

    public function getCityAttribute($value)
    {
        return $value;
    }

    public function getModelAttribute($value)
    {
        return $value;
    }

    public function getBankAttribute($value)
    {
        return $value;
    }
}
