<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   /*
    public function age_groups()
    {
        return $this->belongsToMany(Age_group::class);
        //return $this->hasMany(Age_group::class);
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
protected $table = 'categories';
}