<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attendee';

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
    //protected $fillable = ['name', 'email', 'academy_major', 'academy_year', 'motivation', 'prior_knowledge', 'prior_languages'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    //protected $casts = [
    //    'prior_languages' => 'array',
    //];

}