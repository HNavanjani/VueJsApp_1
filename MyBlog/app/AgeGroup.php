<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model
{
    /*
    public function categories()
    {
        return $this->belongsToMany(Category::class);
        //return $this->belongsTo(Category::class);
    }
    */

    /**
 * The table primary key.
 *
 * @var int
 */
protected $primaryKey = 'id';
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $guarded = [];
/**
 * Make false default (created_at,updated_at).
 *
 * @var boolean
 */
public $timestamps = false;
/**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'age_groups';
}
