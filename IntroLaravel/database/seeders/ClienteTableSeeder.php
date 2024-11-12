<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                
                'apellido'=>'Ortiz',
                'correo'=>'baruchsaur125@gmail.com',
                'nombre'=>'Baruch',
                'telefono'=>'1234567891'
            ],
            [
                'nombre'=>'Fernando',
                'apellido'=>'Gomez',
                'correo'=>'fernandopolo@gmail.com',
                'nombre'=>'Fernando',
                'telefono'=>'1234567892'
            ],
            [
                'nombre'=>'Marlen',
                'apellido'=>'Zamudio',
                'correo'=>'marlenezamudio@gmail.com',
                'nombre'=>'Marlen',
                'telefono'=>'1234567882'
            ]]
        );




    }
}
