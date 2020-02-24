<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /*
    protected $fillable = [
        'title', 'intorduction','description','category_id','age_group_id'
    ];
    */


    public function age_groups()
    {
        return $this->belongsToMany('App\Age_group','age_group_id',id);
    }

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
protected $table = 'blogs';
}