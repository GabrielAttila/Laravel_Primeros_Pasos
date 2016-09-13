<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * definimos una propiedad filelable, indicando que la propiedad o atributo "note" pueda
     * ser cargada como un array a traves del metodo "create"
     */
    protected $fillable = ['note'];

}
