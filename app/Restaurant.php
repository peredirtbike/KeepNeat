<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    public $timestamps = FALSE;

    protected $fillable = [
        'nom', 'descripcio', 'user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Imatges()
    {
        return $this->hasMany(Imatge::class);
    }

}
