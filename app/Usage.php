<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usages';
    protected $fillable = ['user_id', 'device_id', 'usage', 'latitude', 'longitude', 'quality'];
}
