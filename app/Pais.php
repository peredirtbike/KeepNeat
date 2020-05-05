<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
    protected $table = 'paisos';
    protected $fillable = [
        'nom',
    ];

    public function Ciutat()
    {
        return $this->hasMany(Ciutat::class);
    }

}

