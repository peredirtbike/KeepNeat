<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinio extends Model
{
    //
    public $timestamps = FALSE;

    protected $table = 'opinions';

    protected $fillable = [
        'usuari_id', 'restaurant_id', 'comentari', 'puntuacio'
    ];

    public function Restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function Usuari()
    {
        return $this->belongsTo(User::class);
    }

}
