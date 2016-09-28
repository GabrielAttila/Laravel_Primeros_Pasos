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

    /**
     * Creamos un metodo llamado Category el cual retornara una relacion de eloquent en este caso
     * llamada "belongsTo()" porque una nota pertenese a una categoria y paramos como argumento
     * el modelo relacionado
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
