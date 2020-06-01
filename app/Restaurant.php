<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    public $timestamps = FALSE;

    protected $fillable = [
        'nom', 'descripcio', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Imatges()
    {
        return $this->hasMany(Imatge::class);
    }

    public function Opinions()
    {
        return $this->hasMany(Opinio::class);
    }
    

}
