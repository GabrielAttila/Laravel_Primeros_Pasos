<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * definimos una propiedad filelable, indicando que la propiedad o atributo "note" pueda
     * ser cargada como un array a traves del metodo "create"
     *
     * le indica a laravel cuales son las columnas que queremos ser capaces de cargar cuando llamamos
     * a metodos como 'create'
     */
    protected $fillable = ['note'];

}
