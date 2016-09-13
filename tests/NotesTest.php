<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{

    /**
     * Comprobamos cuando un usuario visite la pagina notes, pueda ver la primera nota
     */
    public function test_notes_list()
    {

        /**
         * -------------> Having (Teniendo) <-------------
         *
         *      Base de las pruebas, condiciones apra hacer la prueba
         *
         * Usamos Eloquent para crear las 2 notas en la Database
         */
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);
        /**
         * -------------> When (Cuando) <-------------
         *
         *      Definimos las acciones que aria en usuario
         *
         * Verificamos que el usuario al ingresar a la seccion "notes" vea por lo menos dos notas
         */
        $this->visit('notes')
            /**
             * -------------> Then (Entonces) <-------------
             *
             *      Agregamos todas las comprobaciones
             */
             ->see('My first note')
             ->see('Second note');
    }
}
