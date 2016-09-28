<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        /**
         * Llamamos a todos los seeder creados para su posterior uso
         */
        $this->call(CategoryTableSeeder::class);
        $this->call(NoteTableSeeder::class);

        Model::reguard();
    }
}
