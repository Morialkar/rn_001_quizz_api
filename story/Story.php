<?php

namespace Story;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model 
{

    protected $table = 'stories';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function chapters()
    {
        return $this->hasMany('Chapter', 'story_id');
    }

}