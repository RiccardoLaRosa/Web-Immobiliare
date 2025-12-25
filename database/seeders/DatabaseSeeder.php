<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         Property::create([
            'title' => 'Villa moderna con piscina',
            'description' => 'Splendida villa di 200mq con piscina e giardino.',
            'sqm' => 200,
            'rooms' => 5,
            'address' => 'Via Roma 12',
            'city' => 'Roma',
            'status' => 'Disponibile',
        ]);
        Property::create([
            'title' => 'Appartamento centrale',
            'description' => 'Appartamento di 80mq nel centro città, vicino a tutti i servizi.',
            'sqm' => 80,
            'rooms' => 3,
            'address' => 'Via Milano 5',
            'city' => 'Milano',
            'status' => 'Non Disponibile',
        ]);
        Property::create([
            'title' => 'Bilocale economico',
            'description' => 'Bilocale di 50mq perfetto per coppie.',
            'sqm' => 50,
            'rooms' => 2,
            'address' => 'Via Torino 10',
            'city' => 'Torino',
            'status' => 'Disponibile',
        ]);
        Property::create([
            'title' => 'Attico panoramico',
            'description' => 'Attico di lusso con terrazza panoramica di 120mq.',
            'sqm' => 120,
            'rooms' => 4,
            'address' => 'Corso Venezia 20',
            'city' => 'Milano',
            'status' => 'Disponibile',
        ]);
        Property::create([
            'title' => 'Casa indipendente',
            'description' => 'Casa indipendente di 150mq con giardino privato.',
            'sqm' => 150,
            'rooms' => 4,
            'address' => 'Via Napoli 33',
            'city' => 'Napoli',
            'status' => 'Non disponibile',
        ]);
    }
}
