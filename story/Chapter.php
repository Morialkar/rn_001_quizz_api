<?php

namespace Story;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model 
{

    protected $table = 'chapters';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function story()
    {
        return $this->belongsTo('Story', 'story_id');
    }

    public function scenes()
    {
        return $this->hasMany('Scene', 'chapter_id');
    }

}