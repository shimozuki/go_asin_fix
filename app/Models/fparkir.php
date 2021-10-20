<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fparkir extends Model
{
    protected $fillable = [
        'tanah_id','name'
    ];


    public function tanahs()
    {
        return $this->hasMany('App\Models\tanah','id_tanah');
    }
}
