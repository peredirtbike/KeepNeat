<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    //
    protected $table = 'telefons';
    public $timestamps = false;

    public function Usuaris()
    {
        return $this->belongsTo(User::class);
    }


}
