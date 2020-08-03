<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table = 'nombre de la tabla';

    protected $fillable = ['title', 'url', 'description'];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
