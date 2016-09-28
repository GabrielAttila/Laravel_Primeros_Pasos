<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Espesificamos que una categoria tiene muchas notas
     */
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
