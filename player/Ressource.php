<?php

namespace Player;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model 
{

    protected $table = 'ressources';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function type()
    {
        return $this->hasOne('RessourceType', 'ressource_type_id');
    }

}