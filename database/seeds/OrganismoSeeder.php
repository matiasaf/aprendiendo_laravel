<?php

use Illuminate\Database\Seeder;

use App\Organismo;

class OrganismoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Organismo::create(['nombre' => 'Dirección general de Informatica']);
        Organismo::create(['nombre' => 'Secretaria de Modernización']);
        Organismo::create(['nombre' => 'Ministerio de Economía']);
        Organismo::create(['nombre' => 'Ministerio de Gobierno']);

    }
}
