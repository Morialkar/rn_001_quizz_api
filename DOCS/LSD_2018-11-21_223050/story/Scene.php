<?php

namespace Story;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scene extends Model 
{

    protected $table = 'scenes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function chapter()
    {
        return $this->belongsTo('Chapter', 'chapter_id');
    }

}