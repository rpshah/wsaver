<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'familys';

    protected $fillable = ['family_income'];

}
