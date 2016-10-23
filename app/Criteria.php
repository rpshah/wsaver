<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'criterias';

    protected $fillable = ['gender', 'age_max', 'family_income_max', 'area_id', 'daily_allowence', 'monthly_allowence'];
    
}
