<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    //
    protected $table = 'ciutats';

    protected $fillable = [
        'nom', 'paisos_id'
    ];

    public function Paisos()
    {
        return $this->belongsTo(Pais::class);
    }

    public function Direccio()
    {
        return $this->hasMany(Direccio::class);
    }
}
