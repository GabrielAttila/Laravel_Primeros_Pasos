<?php

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
        // creamos unas notas
        /**for ($i = 1; $i <= 100; $i++){
            Note::create(['note' => "Note $i"]);
        }**/
        // Combinamos seeders con factory
        /**
         * 1: Llamamos al modelo factory
         * 2: Referenciamos al nombre de la clase
         * 3: Usamos el metodo times() para espesificar la cantidad de notas  que queremos crear
         * 4: Finalmente llamamos al metodo create
         */
        factory(Note::class)->times(30)->create();
    }
}
