<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imatge extends Model
{
    //
    protected $table = 'imatges_restaurant';

    protected $fillable = [
        'restaurant_id', 'rutaImatge',
    ];


    public function Restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }

}
