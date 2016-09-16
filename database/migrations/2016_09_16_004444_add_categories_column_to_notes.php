<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddCategoriesColumnToNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            /**
             * agregamos una columna de tipo entero a la table notes
             * con el nombre categori_id la cual incluirá valores nulos
             * es decir podemos crear una nota sin categoria
             * y le indicamos que tendra un indice para que busque mas rapido
             * y colocamos el campo despues de la columna note
             */
            $table->unsignedInteger('category_id')->nullable()->index()->after('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            /**
             * vamos a eliminar una columna
             */
            $table->dropColumn('category_id');
        });
    }
}
