<?php

use App\Category;
use App\Note;
use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Traemos las categorias ya creadas
         */
        $categories = Category::all();
        // creamos unas notas
        /**for ($i = 1; $i <= 100; $i++){
            Note::create(['note' => "Note $i"]);
        }**/
        // Combinamos seeders con factory.
        /**
         * 1: Llamamos al modelo factory
         * 2: Referenciamos al nombre de la clase
         * 3: Usamos el metodo times() para espesificar la cantidad de notas  que queremos crear
         * 4: Finalmente llamamos al metodo create (solo cuando no estan relacionados)
         *
         *      factory(Note::class)->times(100)->create();
         *
         * Cuando una tabla esta relacionada tenemos que crear los modelos con make
         *
         * 5: Retornamos una coleccion de notas que aun no han sido grabadas en la db
         * 6: Recorremos cada una de las notas para asignarle una categoria aleatoria
         */
        $notes = factory(Note::class)->times(100)->make();
        foreach ($notes as $note) {
            $categories->random()->notes()->save($note);
        }
    }
}
