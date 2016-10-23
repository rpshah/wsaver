<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';

    protected $fillable = ['name', 'latitude_min', 'latitude_max', 'longitude_min', 'longitude_max'];
}
