<?php

//use Illuminate\Foundation\Testing\WithoutMiddleware;

use \Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    // desactivamos los Middleware para hacer la pruebas con post, get etc...
    //use WithoutMiddleware;

    // ejecutamos todas las pruebas dentro de una transaccion en la base de datos
    use DatabaseTransactions;
    /**
     * Comprobamos cuando un usuario visite la pagina notes, pueda ver la primera y segunda nota
     */
    public function test_notes_list()
    {
        /**
         * -------------> Having (Teniendo) <-------------
         *
         *      Base de las pruebas, condiciones para hacer la prueba
         *
         * Usamos Eloquent para crear las 2 notas en la Database
         */
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);
        /**
         * -------------> When (Cuando) <-------------
         *
         *      Definimos las acciones que aria el usuario
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

    public function test_create_note()
    {
        /**
         * -------------> When (Cuando) <-------------
         */
        // Cuando visitamos la url 'notes'
        $this->visit('notes')
             // Y precionamos un enlace llamado 'Add a note'
             ->click('Add a note')
             // Nos lleva a una nueva pagina 'notes/create'
             ->seePageIs('notes/create')
             // Donde vamos a ver un titulo ej: 'Create a note'
             ->see('Create a note')
             // Y escribimos 'A new note' en un campo llamado 'note'
             ->type('A new note', 'note')
             // Y al presionar el boton Create note
             ->press('Create note')
             // Vamos hacer llevados de vuelta a la pagina "listado de notas"
             ->seePageIs('notes')
             // Y vamos a ver el texto 'A new note' el cual escribimos con anterioridad
             ->see('A new note')
             // Y vamos a tener esta nota registrada en la Database
             ->seeInDatabase('notes',[
                 'note' => 'A new note'
             ]);
    }
}
