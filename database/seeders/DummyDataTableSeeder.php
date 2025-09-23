<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DummyData;

class DummyDataTableSeeder extends Seeder
{
    public function run(): void
    {
        DummyData::create([
            'name' => 'Fachrozzi Rizky Wibowo',
            'age' => 20,
            'city' => 'Madiun',
        ]);

        DummyData::create([
            'name' => 'Muhammad Budi',
            'age' => 22,
            'city' => 'Surabaya',
        ]);

        DummyData::create([
            'name' => 'Siti Aisyah',
            'age' => 21,
            'city' => 'Malang',
        ]);
    }
}
