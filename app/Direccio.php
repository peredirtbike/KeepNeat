<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccio extends Model
{
    //
    protected $table = 'direccions';
    public $timestamps = false;


    protected $fillable = [
        'carrer', 'numero', 'pis', 'ciutats_id'
    ];
    

    public function Ciutats()
    {
        return $this->belongsTo(Ciutat::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
}

